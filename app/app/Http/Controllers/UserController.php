<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {

        $user = User::all();
        return view('users.index', compact('user'));
    }

    public function create()
    {
        $roles = Role::get();

        return view('users.form_add_users', compact('roles'));
    }

    public function edit(Request $s)
    {
        $users = User::find($s->id);
        $roles_d = Role::all();
        foreach ($roles_d as $key => $value) {
            # code...
            $roles[] = $value;
        }
        $userRole = $users->roles[0]->id;

        return view('users.edit', compact('users', 'roles', 'userRole'));
    }

    public function store(Request $request)
    {
        //Validate name, email and password fields
        $this->validate($request, [
            'name' => 'required|max:120',
            'roles' => 'required',
            'user_sim' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        $request->session()->flash('flash_messages', 'Berhasil menambahkan user.');
        return redirect()->route('create.users');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'user_sim' => 'required',
            'email' => 'required|email|unique:users,email,' . $request->user_id,
            'password' => 'required',
            'confirm_password' => 'same:password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $user = User::find($request->user_id);

        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $request->user_id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('user.index')
            ->with(
                'flash_message',
                'User successfully edited.'
            );
    }


    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('user.index')
            ->with('flash_message', 'User deleted successfully');
    }
}

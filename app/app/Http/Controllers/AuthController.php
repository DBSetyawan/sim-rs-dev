<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use Validator;
use App\Models\User;
use App\Models\userVerify;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Foundation\Auth\RegistersUsers;

class AuthController extends Controller
{

    use RedirectsUsers;

    public function showFormLogin()
    {
        if (Auth::check()) { 
            return redirect()->route('dashboard');
        }

        return view('auth-user.login');
    }
  
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('products/customer/building-box')
                        ->withSuccess('You have Successfully loggedin');
        }

        return redirect('/auth/login')->withSuccess('The session has been taken over by the server, please login again.');

    }
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('about.dashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
  
    public function showFormRegister()
    {
        return view('auth-user.registers');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'captcha' => ['required','captcha'],
        ]);
    }
   
    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

    public function createds(array $data)
    {
        
        $named = isset($data['ppic']) ? $data['ppic'] : $data['fullname'];
        
      return User::create([
        'name' => $named,
        'email' => $data['email'],
        'accessable' => "user",
        'contact' => $data['contact'],
        'address' => $data['address'],
        'phone' => $data['phone'],
        'password' => Hash::make($data['password'])
      ]);

        // protected function registered(Request $request, $user)
    // {

    //     $token = Str::random(64);
    //     // event(new Registered($user = $this->createds($request->all(), function($users) use ($token){
    //             userVerify::create([
    //                 'user_id' => $user->id, 
    //                 'token' => $token
    //             ]);
    //     //     })
    //     // ));
  
    //     return $this->registered($request, $user) ?: redirect($this->redirectPath());

    //     // return $this->registered($request, $user)
    //     //     ?: redirect($this->redirectPath());
    }
  
    public function registerEx(Request $request)
    {
        // $rules = [
        //     'name'                  => 'required|min:3|max:35',
        //     'email'                 => 'required|email|unique:users,email',
        //     'password'              => 'required|confirmed'
        // ];

        // $messages = [
        //     'name.required'         => 'Nama Lengkap wajib diisi',
        //     'name.min'              => 'Nama lengkap minimal 3 karakter',
        //     'name.max'              => 'Nama lengkap maksimal 35 karakter',
        //     'email.required'        => 'Email wajib diisi',
        //     'email.email'           => 'Email tidak valid',
        //     'email.unique'          => 'Email sudah terdaftar',
        //     'password.required'     => 'Password wajib diisi',
        //     'password.confirmed'    => 'Password tidak sama dengan konfirmasi password'
        // ];
  
        // $validator = Validator::make($request->all(), $rules, $messages);
  
        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput($request->all);
        // }
        $request->validate([
            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'phone' => 'required|min:1',
            'address' => 'required|min:10',
            // 'captcha' => 'required|captcha'
        ],
        [   
            // 'captcha.required'    => 'Captcha not valid, please try again.',
            // 'name.required'    => 'Maaf nama sudah ada yang memakai, silahkan ulangi kembali.',
            // 'email.unique'    => 'Maaf email sudah pernah digunakan, silahkan ulangi kembali.',
            // 'password.required'    => 'Maaf password terlalu lemah, silahkan ulangi kembali.'
        ]
    );
           
        $data = $request->all();
        $this->createds($data);
       
        // return redirect("dashboard")->withSuccess('Success login');
    }

    public function handleProviderCallback(Request $request)
    {
        try {
            $user_google    = Socialite::driver('google')->user();
            $user           = User::where('email', $user_google->getEmail())->first();

            if($user != null){
                \auth()->login($user, true);
                return redirect()->route('dashboard');
            }else{

                $create = User::create([
                    'email'=> $user_google->getEmail(),
                    'name'=> $user_google->getName(),
                    'password'          => 0,
                    'email_verified_at' => now(),
                    'is_email_verified' => 1,
                    'accessable' => "user",
                  ]);

                \auth()->login($create, true);
                return redirect()->route('dashboard');
            }

        } catch (\Exception $e) {
            return redirect()->route('dashboard');
        }

    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function register(Request $request)
    {
        $request->validate([
            // 'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'phone' => 'required|min:1',
            'address' => 'required|min:10',
            // 'captcha' => 'required|captcha'
        ],
        [   
            // 'captcha.required'    => 'Captcha not valid, please try again.',
            // 'name.required'    => 'Maaf nama sudah ada yang memakai, silahkan ulangi kembali.',
            // 'email.unique'    => 'Maaf email sudah pernah digunakan, silahkan ulangi kembali.',
            // 'password.required'    => 'Maaf password terlalu lemah, silahkan ulangi kembali.'
        ]
        );

        $data = $request->all();
        $user = $this->createds($data);

        $token = Str::random(64);

      Mail::send('auth-user.emailVerificationEmail', ['token' => $token], function($message) use($user, $token){
            userVerify::create([
                'user_id' => $user->id, 
                'token' => $token
            ]);
            $message->to($user['email']);
            $message->subject('Email Verification Mail - KOP');
        });

        // event(new Registered($user = $this->createds($request->all())));
        Auth::login($user, $remember = true);

        // return $this->registered($request, $user)
        //     ?: redirect($this->redirectPath());
        return redirect("dashboard")->withSuccess('Success login');

    }

    public function verifyAccount($token)
    {
        $verifyUser = userVerify::where('token', $token)->first();
  
        $message = 'Sorry your email cannot be identified.';
  
        if(!is_null($verifyUser) ){
            $user = $verifyUser->user;
              
            if(!$user->is_email_verified) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }
  
      return redirect()->route('dsbox')->with('message', $message);
    }
  
    public function logout(Request $request)
    {
        Auth::logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return redirect('/auth/login')->with('info', "Please enter your credentials again.");
    }
  
}

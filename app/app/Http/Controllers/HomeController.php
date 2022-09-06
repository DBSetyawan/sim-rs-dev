<?php

namespace App\Http\Controllers;

use Midtrans;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function notificationHandler(Request $request)
    {
            $midtrans = new Midtrans;

            // $midtrans = new \notif;
            echo 'test notification handler';
            $json_result = file_get_contents('php://input');
            $result = json_decode($json_result);

            if($result){
            $notif = $midtrans->status($result->order_id);
            }

            error_log(print_r($result,TRUE));

    }
}

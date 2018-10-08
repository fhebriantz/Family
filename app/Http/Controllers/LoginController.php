<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Routing\Middleware\LoginCheck;
use App\Http\Controllers\Controller;
use App\Http\Model\User_management;
use DateTime;
use Auth;
use DB;
use Session;

class LoginController extends Controller
{ 

    // ============================ DMS LOGIN ==============================
    public function list_user(){ 
        $user = User_management::all();
        $no = 1;

        return view('pages/cms/user/user', compact('user','no'));
    }

    public function show(Request $request){
        $request->session()->forget('message');
        return view('pages/user/login');
    } 

    public function login(Request $request){
        $username = $request->username;
        $password = $request->password;

        $checkLogin = User_management::where(['username'=>$username,'password'=>$password])
        ->select('user_management.*')
        ->get();
        if (sizeof($checkLogin) > 0){
            foreach ($checkLogin as $key => $val) {

                $id_akun = $val->id;
                $name = $val->name;
                $username = $val->username;

                $request->session()->put('session_login', true);
                $request->session()->put('session_id', $id_akun);
                $request->session()->put('session_name', $name);
                $request->session()->put('session_username', $username);
                return  redirect('/cms/about');
            }
        }
        else{
            $request->session()->put('message', "Login failed username/password not match");
            return view('pages/user/login');
        }
    }

    public function logout (Request $request){
                $request->session()->forget('session_login');
                $request->session()->forget('session_id');
                $request->session()->forget('session_name');
                $request->session()->forget('session_username');
                $request->session()->forget('message');

                // $request->session()->flush();

                return  redirect('login_cms');
    }
}

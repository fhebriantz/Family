<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Routing\Middleware\LoginCheck;
use Illuminate\Support\Facades\Redirect;
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
        if (session()->get('session_id_group') == 1){
            $user = User_management::all();
            $no = 1;

            return view('pages/cms/user/user', compact('user','no'));
        }
        else{
            return redirect('/cms/about');
        }
    }

    public function show(Request $request){
        $request->session()->forget('message');
        return view('pages/user/login');
    } 

    function input()
    {
        if (session()->get('session_id_group') == 1){
            return  view('pages/cms/user/userinput');
        }
        else{
            return redirect('/cms/about');
        }
    }

    function edit($id)
    {   
        if (session()->get('session_id_group') == 1){
            $user_management=User_management::where('id','=',$id)->first();
            return  view('pages/cms/user/useredit', compact('user_management'));
        }
        else{
            return redirect('/cms/about');
        }
    }

    function insert (Request $request)  
    {
        $validatedData = $request->validate([
                
                'name' => 'required',
                'username' => 'required|unique:user_management',
                'password' => 'required|confirmed',
                'id_usergroup' => 'required',
            ]);

        $user_management = new User_management;

            $user_management->name = $request->name; 
            $user_management->username = $request->username; 
            $user_management->password = $request->password; 
            $user_management->password = $request->password_confirmation; 
            $user_management->id_usergroup = $request->id_usergroup; 
            $user_management->created_by = session()->get('session_name'); 
        // untuk mengsave
        $user_management->save();

        return  redirect('/cms/forgotpass');
    }

    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'name' => 'required',
                'username' => 'required',
                'password' => 'required|confirmed',
                'id_usergroup' => 'required',
            ]);
        
        $user_management = User_management::find($id);

            $user_management->name = $request->name; 
            $user_management->username = $request->username; 
            $user_management->password = $request->password; 
            $user_management->password = $request->password_confirmation; 
            $user_management->id_usergroup = $request->id_usergroup; 
            $user_management->created_by = session()->get('session_name'); 
        // untuk mengsave
        $user_management->save();

        return  redirect('/cms/forgotpass');
    }

    public function delete($id){

        $user_management = User_management::find($id);
        $user_management->delete();
        
        return  redirect('/cms/forgotpass');
    } 

    public function login(Request $request){

        $username = $request->username;
        $password = $request->password;

        $token = $request->input('g-recaptcha-response');

        if ($token) {
            $checkLogin = User_management::where(['username'=>$username,'password'=>$password])
            ->select('user_management.*')
            ->get();
            if (sizeof($checkLogin) > 0){
                foreach ($checkLogin as $key => $val) {

                    $id_akun = $val->id;
                    $name = $val->name;
                    $username = $val->username;
                    $id_usergroup = $val->id_usergroup;

                    $request->session()->put('session_login', true);
                    $request->session()->put('session_id', $id_akun);
                    $request->session()->put('session_name', $name);
                    $request->session()->put('session_username', $username);
                    $request->session()->put('session_id_group', $id_usergroup);
                    return  redirect('/cms/about');
                }
            }
            else{
                $request->session()->put('message', "Login failed username/password not match");
                return view('pages/user/login');
            }
        }else{
            $request->session()->flash('captcha', 'Input the reCAPTCHA');
            return  Redirect::back();
        }

        
    }

    public function logout (Request $request){
                $request->session()->forget('session_login');
                $request->session()->forget('session_id');
                $request->session()->forget('session_name');
                $request->session()->forget('session_username');
                $request->session()->forget('id_usergroup');
                $request->session()->forget('message');

                // $request->session()->flush();

                return  redirect('login_cms');
    }
}

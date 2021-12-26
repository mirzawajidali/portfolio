<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Auth extends Controller
{
    //login
    public function login(){
        $data = [
            'title' => 'Login'
        ];
        return view('admin.auth.login',compact('data'));
    }

    //Logged in
    public function logged_in(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required'    => 'Please Enter Your Email',
            'password.required' => 'Please Enter Your Password'
        ]);

        $email = $request->email;
        //Check For Email existance
        $email_verify = User::where('email',$email)->first();
        if($email_verify){
            //Check for password
            $password = $request->password;
            $password_verify = Hash::check($password,$email_verify['password']);
            if($password_verify){
                //Is admin
                if($email_verify['is_admin']==0){
                    return back()->with('error','Your account blocked!',3);
                    exit();
                }
                $request->session()->push('userLoggedin', $email_verify['id']);
                return redirect('admin/dashboard');
            }else{
                return back()->with('error','Invalid Email or Password!',3);
            }
        }else{
            return back()->with('error','Invalid Email or Password!',3);
        }
    }

    //logout
    public function logout(){
        if(Session::has('userLoggedin')){
            Session::pull('userLoggedin');
            return redirect('admin')->with('success','Logged out successfully!',3);
        }
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class LoginController extends Controller
{
    public function get(Request $request){
        if(Auth::check()){
            if(Auth::user()['role']==='student' || Auth::user()['role']==="author"){
                return redirect('/home');
            }else{
                return redirect('/dashboard');
            }
        }
        return view('auth.login');
    }

    public function post(Request $request){
        $load_data = $request->validate([
            "email" => "required|email",
            "password" => "required|string|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*?&]/"
        ]);

        $user = User::where('email', $load_data['email'])->first();
        
        if($user && $user->status === "suspended"){
            return back()->withErrors(['email'=>'User has been Suspended!'])->withInput();
        }

        if(!$user){
            return back()->withErrors(['email'=>'User does not exist!'])->withInput();
        }
        if(!$user['status']=="approved"){
            return back()->withErrors(['email'=>'User suspended!'])->withInput();
        }

        $credentials = ["email" =>$load_data['email'], "password" => $load_data['password']];

        if(Auth::attempt($credentials)){
            return redirect('/');
        }else{
            return back()->withErrors(['password'=>'Invalid password'])->withInput();
        }
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Role;

class SignupController extends Controller
{
    public function get(Request $request){
        if(Auth::check()){
            if(Auth::user()['role']==='student' || Auth::user()['role']==="author"){
                return redirect('/home');
            }else{
                return redirect('/dashboard');
            }
        }
        $role = "student";
        return view('auth.signup',compact('role'));
    }

    public function post(Request $request){

        $load_data = $request->validate([
            "name"     => "required|string|min:3|max:20",
            "email"    => "required|email|unique:users,email|max:80",
            "password" => "required|string|min:8|max:16|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*?&]/",
            "role"     => "required|string|in:author,student"
        ]);

        try{
            DB::beginTransaction();

            $user = User::Create([
                "name"     => $load_data['name'],
                "email"    => $load_data['email'],
                "password" => Hash::make($load_data['password']),
                "role"     => $load_data['role'],
            ]);

            $user->roles()->attach(Role::where('role_name',  $load_data['role'])->first());

            DB::commit();

            $credentials = ["email" =>$load_data['email'], "password" => $load_data['password']];

            if(Auth::attempt($credentials)){
                return redirect('/');
            }
            return redirect('login/')->with('success', 'User registered successfully!');
        }catch (Exception $e){
            DB::rollback();
            return redirect()->back()->withErrors("hello")->withInput();
        }
    }
}

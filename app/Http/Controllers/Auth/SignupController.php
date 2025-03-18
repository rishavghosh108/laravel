<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Role;
use App\Models\UserRole;

class SignupController extends Controller
{
    public function get(Request $request){
        if(Auth::check()){
            return redirect()->route('dashboard');
        }
        $role = "Student";
        return view('auth.signup',compact('role'));
    }

    public function post(Request $request){

        $load_data = $request->validate([
            "name"     => "required|string|min:3|max:20",
            "email"    => "required|email|unique:users,email|max:80",
            "password" => "required|string|min:8|max:16|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*?&]/",
            "role"     => "required|string|in:Super Admin,Admin,Author,Student"
        ]);

        try{
            DB::beginTransaction();

            $user = User::Create([
                "name"     => $load_data['name'],
                "email"    => $load_data['email'],
                "password" => Hash::make($load_data['password']),
                "role"     => $load_data['role'],
            ]);

            $role = Role::where('name',  $load_data['role'])->first();

            UserRole::Create([
                "user_id" => $user->id,
                "role_id" => $role->id
            ]);

            DB::commit();

            return redirect()->route('dashboard')->with('success', 'User registered successfully!');
        }catch (Exception $e){
            DB::rollback();
            return redirect()->back()->withErrors($e)->withInput();
        }
    }
}

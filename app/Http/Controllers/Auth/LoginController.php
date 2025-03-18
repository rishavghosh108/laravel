<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller; // Add this line
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function get(Request $request){
        return view('auth.login');
    }

    public function post(Request $request){
        return view('auth.login');
    }
}

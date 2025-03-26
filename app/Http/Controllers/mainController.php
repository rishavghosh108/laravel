<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class mainController extends Controller
{
    public function get(){
        
        if(Auth::user() && Auth::user()->role !== "student" && Auth::user()->role !== "author" ) {
            return redirect('/dashboard');
        }
        return redirect('/home');
        
    }
}

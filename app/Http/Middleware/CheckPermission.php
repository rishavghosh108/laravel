<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check()){
            return redirect('/login');
        }

        // $path = $request->path();
        // $role = User::with('Role')->find(Auth::user()->id);
        // $role = User::with('role')->find(Auth::user()->id) ?? 'No role assigned';
        // $user = User::with('roles')->find(Auth::user()->id);
        // $role = $user->first()->role ?? 'No role assigned';

        

        // var_dump($user);


        // echo "$path, $role";
        return $next($request);
    }
}

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

        if(!Auth::check() || Auth::user()->status === "suspended"){
            Auth::logout();
            return redirect('/login');
        }

        $path = $request->path();

        $hasAccess = User::join('user_role', 'users.id', '=', 'user_role.user_id')
            ->join('roles', 'roles.id', '=', 'user_role.role_id')
            ->join('path_role', 'roles.id', '=', 'path_role.role_id')
            ->join('paths', 'paths.id', '=', 'path_role.path_id')
            ->where('user_role.user_id', Auth::id())
            ->where('paths.path', $path)
            ->exists();

        // $hasAccess = User::with('roles')
        //     ->where('id', Auth::id())
            // ->where('roles.paths.path', $path)
            // ->exists();
            
            // dd($hasAccess);


        if(!$hasAccess){
            return redirect('/home');
        }
        
        return $next($request);
    }
}

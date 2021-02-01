<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{

    public function handle(Request $request, Closure $next){
        $userRoles=Auth::user()->roles->pluck("name");
        if(!$userRoles->contains("admin")){
            return redirect(route("admin_login"))->with("error","You dont have permission");
        }
        return $next($request);
    }


}

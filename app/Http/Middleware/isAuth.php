<?php

namespace App\Http\Middleware;

use App\Configs\RedirectUrlConfigs;
use App\User;
use Closure;

class isAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $server_request = $request->only('api_token');
        $api_token = $server_request['api_token'];
        if (User::where('api_token',$api_token)->get())return $next($request);
        return redirect(RedirectUrlConfigs::ROOT);
    }
}

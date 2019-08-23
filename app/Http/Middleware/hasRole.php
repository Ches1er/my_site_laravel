<?php

namespace App\Http\Middleware;

use App\Configs\RedirectUrlConfigs;
use Closure;
use Illuminate\Support\Facades\Crypt;

class hasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $crypted_roles = $request->only('api_token')['api_token'];
        $encrypted_roles = Crypt::decrypt($crypted_roles);
        $encr_roles_from_json = json_decode($encrypted_roles);
        if (in_array($role,$encr_roles_from_json))return $next($request);
        return redirect(RedirectUrlConfigs::ROOT);
    }
}

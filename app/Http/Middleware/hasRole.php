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
        $token =  $request->bearerToken();
        // We must pick the decrypted roles object from api_token, payload is situated between two "."
        $first_dot_pos = strpos($token,'.');
        $last_dot_pos = strripos($token, '.');
        // Cut crypted roles object
        $crypted_roles = substr($token, $first_dot_pos+1, $last_dot_pos-$first_dot_pos-1);
        // Decrypt and decode object from json
        $encrypted_roles = base64_decode($crypted_roles);
        $encr_roles_from_json = json_decode($encrypted_roles);
        // Check if user roles has certain role
        if (in_array($role,$encr_roles_from_json->roles))return $next($request);
        return redirect(RedirectUrlConfigs::ROOT);
    }
}

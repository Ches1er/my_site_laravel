<?php

namespace App\Http\Controllers\Auth;

use App\Contracts\ServiceApiAuth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ApiAuthController extends Controller
{
    protected $authService;

    public function __construct(ServiceApiAuth $serviceApiAuth)
    {
        $this->authService = $serviceApiAuth;
    }

    public function actionLogin(Request $request){
        $credentials = $request->only('name', 'password');
        $ifRemember = $request->only('rememberMe')['rememberMe'];
        return $this->authService->login($credentials, $ifRemember);
    }

    public function actionLoginRemember(Request $request){
        $remember_token = $request->post('remember_token');
        return $this->authService->loginRemember($remember_token);
    }

    public function actionRegister(Request $request){
        $passport = $request->only('name','email','password','phones','confirmedClient');
        return $this->authService->register($passport);
    }

    public function actionEmailVerification($verificationtoken){
        if($this->authService->mail_verification($verificationtoken)){
            return redirect()->to('http://localhost:4200/');
        };
        return null;
    }

    public function actionUser(Request $request){
        $api_token = $request->post('api_token');
        return $this->authService->user($api_token);
    }

    public function actionRoles(Request $request){
        $api_token = $request->post('api_token');
        return $this->authService->roles($api_token);
    }
}

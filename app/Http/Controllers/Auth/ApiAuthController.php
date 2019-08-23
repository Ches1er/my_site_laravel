<?php

namespace App\Http\Controllers\Auth;

use App\Configs\RedirectUrlConfigs;
use App\Contracts\ServiceApiAuth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ApiAuthController extends Controller
{
    protected $authService;
    private $redirectUrlConfigs;

    public function __construct(ServiceApiAuth $serviceApiAuth)
    {
        $this->authService = $serviceApiAuth;
        $this->redirectUrlConfigs = new RedirectUrlConfigs();
    }

    public function actionLogin(Request $request){
        $credentials = $request->only('name', 'password');
        $ifRemember = $request->only('rememberMe')['rememberMe'];
        return $this->authService->login($credentials, $ifRemember);
    }

    public function actionLoginRemember(Request $request){
        $params = $request->only('remember_token');
        return $this->authService->loginRemember($params['remember_token']);
    }

    public function actionRegister(Request $request){
        $passport = $request->only('name','email','password','phones','confirmedClient');
        return json_encode($this->authService->register($passport));
    }
    public function actionRepeatVerEmail(Request $request){
        $server_request = $request->only('api_token');
        return json_encode($this->authService->repeatVerification($server_request['api_token']));
    }

    public function actionEmailVerification($verificationtoken){
        if($this->authService->mail_verification($verificationtoken)){
            return redirect($this->redirectUrlConfigs::ROOT);
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
    public function actionIsAdmin(Request $request){
        $params = $request->only('api_token');
        return json_encode($this->authService->isAdmin( $params['api_token']));
    }
    public function actionUpdateUser(Request $request){
        $data = $request->only('id','name','email','phones','confirmed_client','email_verified_at');
        return json_encode($this->authService->updateUser($data));
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 08.07.2019
 * Time: 12:14
 */

namespace App\Services;


use App\Configs\RoleConstants;
use App\Contracts\ServiceApiAuth;
use App\Http\Resources\UserResource;
use App\Mail\ConfirmationEmail;
use App\Configs\MailConfigs;
use App\Mail\ConfirmationEmailSuccess;
use App\Mail\PasswordUpdatedEmail;
use App\Models\Role;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class DBApiAuthService implements ServiceApiAuth
{
    private function apiToken(User $user){

        $header = json_encode((object)['alg'=>'HS256', 'typ'=>'JWT']);
        $payload = json_encode((object)['roles'=>$user->Roles()]);
        $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));
        $base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));
        // $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, 'secret', true);
        $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, $user->name, true);
        $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));
        return $base64UrlHeader.'.'.$base64UrlPayload.'.'.$base64UrlSignature;
    }

    // -- LOGIN

    public function login(Array $credentials, bool $ifRemember)
    {
        if (Auth::attempt($credentials)) {
            $user = User::where('name',$credentials['name'])->first();
            $api_token = $this->apiToken($user);
            if ($ifRemember){
                $remember_token = Str::random(20);
                $user->update(['api_token'=>$api_token,'remember_token'=>$remember_token]);
                return json_encode(new UserResource($user));
            }
            else {
                $user->update(['api_token'=>$api_token,'remember_token'=>null]);
                return json_encode(new UserResource($user));
            }
        }
        return json_encode(['error'=>'Ошибка! Логин или пароль введены неверно!']);
    }

    public function loginRemember(string $remember_token)
    {
        $user = User::where('remember_token',$remember_token)->first();
        if (!empty($user)) {
            return json_encode(new UserResource($user));
        }
        return null;
    }

    // -- REGISTER

    public function register(Array $passport)
    {
        if (!empty(User::where('name',$passport['name'])->first())){
            return ['response'=>'User exists'];
        }
        if (User::create([
            'name'=>$passport['name'],
            'email'=>$passport['email'],
            'password'=>Hash::make($passport['password']),
            'phones'=>$passport['phones'],
            'confirmed_client'=>$passport['confirmedClient'],
            'verification_token' => Str::random(10)
        ])) {
            // -- MAIL -->
            MailConfigs::instance()->verificationEmail();
            $user = User::where('name',$passport['name'])->first();
            Mail::to($passport['email'])
                ->send(new ConfirmationEmail(['name'=>$user->name,'verification_token'=>$user->verification_token]));

            //return json_encode(['resp'=>'На указанный Вами адрес электронной почты отправлено письмо с подтверждением регистрациию.']);
            return ['response'=>'Registration succeed'];
        };
        return ['response'=>'Registration error'];
    }

    public function repeatVerification(string $api_token){
        // -- MAIL -->
        MailConfigs::instance()->verificationEmail();
        $user = User::where('api_token',$api_token)->first();

        Mail::to($user->email)
            ->send(new ConfirmationEmail(['name'=>$user->name,'verification_token'=>$user->verification_token]));
        return ['response'=>'Letter has sent'];
    }

    public function mail_verification(string $verification_token)
    {
        try {
            DB::transaction(function () use ($verification_token) {
                $time = time();
                $user = DB::table('users')
                    ->where('verification_token', $verification_token)
                    ->first();
                DB::table('users')
                    ->where('verification_token', $verification_token)
                    ->whereNull('email_verified_at')
                    ->update(['email_verified_at' => $time]);
                if (is_null(DB::table('users_roles')->where('user_id', (int)$user->id)->first())) {
                    $activ_user_role = Role::where('role', RoleConstants::VALID_USER)->first();
                    DB::table('users_roles')->insert(['user_id' => $user->id, 'role_id' => $activ_user_role->id]);
                }
            });
        }
        catch (\Exception $e){
            return ['response'=>'error'];
        }
        $user = User::where('verification_token', $verification_token)->first();
            // -- MAIL -->
            MailConfigs::instance()->verificationEmail();
            Mail::to($user->email)
                ->send(new ConfirmationEmailSuccess(['name'=>$user->name]));
            return ['response'=>'Verification completed'];
    }

    // -- OTHER

    public function user(string $api_token)
    {
        if (!$api_token) return null;
        $user = User::where('api_token',$api_token)->first();
        if (empty($user)) return null;
        return json_encode($user);
    }

    public function roles(string $api_token)
    {
        if (!$api_token) return null;
        $user = User::where('api_token',$api_token)->first();
        if (empty($user)) return null;
        $user_roles = $user->Roles();
        if (count($user_roles) === 0) $user_roles[0] = 'empty';
        return json_encode($user_roles);
    }


    public function isAdmin(string $api_token)
    {
        $roles =  json_decode($this->roles($api_token));
        if (!$roles)return ['response'=>false];
        if (in_array('admin',$roles)) return ['response'=>true];
        return ['response'=>false];
    }

    public function updateUser(array $data)
    {
        if ($data['change_pass']==='no') return $this->updateUserWithoutPass($data);
        if ($data['change_pass']==='yes') return $this->updateUserWithPass($data);
    }

    private function updateUserWithPass(array $data){
        if (User::where('id',$data['id'])->get()){
            if (User::where('id',$data['id'])->update([
                'name' => $data['name'],
                'email' =>$data['email'],
                'phones' =>$data['phones'],
                'confirmed_client' =>$data['confirmed_client'],
                'email_verified_at' =>(int)$data['email_verified_at'],
                'password' => Hash::make($data['new_password'])
            ])) {
                $user_data = ['name' => $data['name'],'email'=>$data['email'],'new_password' => $data['new_password']];
                $this->sendEmailWithNewPassword($user_data);
                return ['response'=>'update pass success'];
            }
        }
        return ['response'=>'error'];
    }

    private function updateUserWithoutPass(array $data){
        if (User::where('id',$data['id'])->get()){
            if (User::where('id',$data['id'])->update([
                'name' => $data['name'],
                'email' =>$data['email'],
                'phones' =>$data['phones'],
                'confirmed_client' =>$data['confirmed_client'],
                'email_verified_at' =>(int)$data['email_verified_at'],
            ])) return ['response'=>'update success'];
        }
        return ['response'=>'error'];
    }

    private function sendEmailWithNewPassword ($user_data) {
        MailConfigs::instance()->verificationEmail();
        Mail::to($user_data['email'])
            ->send(new PasswordUpdatedEmail(['name'=>$user_data['name'], 'new_password' => $user_data['new_password']]));
}
}

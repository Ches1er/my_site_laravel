<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 08.07.2019
 * Time: 12:08
 */

namespace App\Contracts;



interface ServiceApiAuth
{
    public function login(Array $credentials, bool $ifRemember);
    public function loginRemember(string $remember_token);
    public function register(Array $passport);
    public function mail_verification (string $verification_token);
    public function user(string $api_token);
    public function roles(string $api_token);
    public function isAdmin(string $api_token);
    public function updateUser(array $data);
}

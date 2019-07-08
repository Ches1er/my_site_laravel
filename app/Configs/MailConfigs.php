<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 08.07.2019
 * Time: 16:05
 */

namespace App\Configs;

class MailConfigs
{
    private static $ins = null;
    public static function instance()
    {
        return self::$ins === null ? self::$ins = new self() : self::$ins;
    }
    private function __construct()
    {
    }
    public function verificationEmail ():void{
        config(['mail.username' => 'myblogtestemail@gmail.com']);
        config(['mail.password' => 'testemail']);
    }
}

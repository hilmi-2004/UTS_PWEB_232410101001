<?php

namespace App\Models;

class UserData
{
    public static function allUsers()
    {
        return [
            [
                'username' => 'Hilmi',
                'password' => '345'
            ],
        ];
    }

    public static function checkCredentials($username, $password)
    {
        foreach (self::allUsers() as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                return true;
            }
        }
        return false;
    }
}


<?php

namespace App\Models;

class Profile
{
    public static function getDataByUsername($username)
    {
        $users = [
            'Hilmi' => [
                'username' => 'Hilmi',
                'nama' => 'Hilmi Dwi Saputro',
                'telepon' => '081234567890',
                'alamat' => 'Jl. rasamala no.55b patrang. Jember',
                'password' => '234'
            ],
        ];

        return $users[$username] ?? null;
    }
}

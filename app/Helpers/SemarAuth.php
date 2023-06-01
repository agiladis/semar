<?php

namespace App\Helpers;

// use App\Helpers\Api;
// use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

class SemarAuth
{
    public static function saveUser($data)
    {
        // pre($data);
        Session::put('is-login', true);
        foreach ($data as $key => $value) {
            Session::put($key, $value);
        }
        return true;
    }

    public static function isLogin()
    {
        return Session::get('is-login');
    }

    public static function logout()
    {
        Session::flush();
        Session::put('is-login', false);
    }

}

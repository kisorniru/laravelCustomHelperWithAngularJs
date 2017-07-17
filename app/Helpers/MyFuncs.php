<?php

namespace App\Helpers;

use Auth;

class MyFuncs {

    public static function full_name($first_name,$last_name) {
        return $first_name.' '.$last_name;
    }

    public static function auth_user_name() {
        return Auth::user()->first_name.' '.Auth::user()->last_name;   
    }
}
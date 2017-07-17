<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MyFuncs;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
        return MyFuncs::auth_user_name();
    }

    /**
     * Show the custom functions' return value.
     *
     * @return \MyFuncs
     */
    public function customFuncTest()
    {
        return MyFuncs::auth_user_name();
    }
}

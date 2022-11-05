<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(Type $var = null)
    {
        # code...
        return view('login.login',[
            'title'     =>  'Login'
        ]);
    }
}

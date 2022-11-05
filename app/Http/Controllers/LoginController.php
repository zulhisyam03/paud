<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('login.login',[
            'title'     =>  'Login'
        ]);
    }

    public function authenticate(Request $request){
        $validated  =   $request->validate([
            'email'     =>  'email:dns|required',
            'password'  =>  'required:min:6'
        ]);

        if (Auth::attempt($validated)) {
            # code...
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }
        return back()->with('gagalLogin','Gagal Login !!!');
    }

    public function logout(){
        request()->session()->invalidate();
        request()->session()->regenerate();

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestIndexController extends Controller
{
    //
    public function index()
    {
        return view('guest.index', [
            'title'     => 'Halaman Tamu'
        ]);
    }
}

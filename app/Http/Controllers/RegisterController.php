<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DataPelengkap;
use App\Models\Kontak;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('register.register',[
            'title'     => 'Register'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validate   =   $request->validate([
            'name'  =>  'required|unique:users',
            'email'     =>  'email:dns|required',
            'password'  =>  'required|min:6',
            'npsn'      =>  'required|numeric'
        ]);

        $validate['password']   =   Hash::make($validate['password']);

        $input  =   User::create([
            'name'      =>  $validate['name'],
            'email'      =>  $validate['email'],
            'password'      =>  $validate['password'],
        ]);
        $inputSekolah   =   Sekolah::create([
            'npsn'      =>  $validate['npsn'],
            'namaSekolah'   =>  $validate['name']
        ]);
        $inputKontak    =   Kontak::create([
            'npsn'      =>  $validate['npsn']
        ]);
        $inputDataPelengkap =   DataPelengkap::create([
            'npsnSekolah'   =>  $validate['npsn']
        ]);


        return redirect('/login')->with('succes','Berhasil Daftar Akun, Silahkan Login !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(register $register)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kontak;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use App\Models\DataPelengkap;
use App\Http\Controllers\Controller;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function show(Sekolah $sekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function editProfile(Sekolah $sekolah)
    {
        $email  =   auth()->user()->email;
        return view('dashboard.profileSekolah',[
            'title'     =>  'Profile Sekolah',
            'profil'     =>  User::where('email',$email)->get()
        ]);
    }
    public function editKontak(Sekolah $sekolah)
    {
        $email  =   auth()->user()->email;
        $user   =   User::where('email',$email)->get();
        foreach ($user as $key) {
            # code...
            $kontak =   Kontak::where('npsn', $key->sekolahProfil['npsn'])->get();
        }
        return view('dashboard.kontakSekolah',[
            'title'     =>  'Kontak Sekolah',
            'kontak'     =>  $kontak
        ]);
    }

    public function editPelengkap(){
        $email  =   auth()->user()->email;
        $user   =   User::where('email',$email)->get();
        foreach ($user as $key) {
            # code...
            $dataPelengkap =   DataPelengkap::where('npsnSekolah', $key->sekolahProfil['npsn'])->get();
        }
        return view('dashboard.dataPelengkap',[
            'title'         =>  'Data Pelengkap',
            'dataPelengkap' =>  $dataPelengkap
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sekolah $sekolah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sekolah $sekolah)
    {
        //
    }
}

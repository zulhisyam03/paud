<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Pegawai;
use App\Models\User;
use App\Models\Prasarana;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $email  =   auth()->user()->email;
        $user   =   User::where('email',$email)->get();
        $tglSekarang    =   date('y');
        foreach ($user as $key) {
            # code...
            $siswa =   Siswa::where('npsnSekolah', $key->sekolahProfil['npsn'])->get();
            $npsn   =    $key->sekolahProfil['npsn'];
        }
        return view('dashboard.siswa',[
            'title'         =>  'Data Siswa',
            'npsnSekolah'   =>   $npsn,
            'siswa'       =>  $siswa,
            'jmlPtk'    =>  Pegawai::count(),
            'jmlPd'     =>  Siswa::count(),
            'jmlPrasarana'  => Prasarana::where([['npsnSekolah', $key->sekolahProfil['npsn']],['semester','LIKE','%'.$tglSekarang.'%']])->count()
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}

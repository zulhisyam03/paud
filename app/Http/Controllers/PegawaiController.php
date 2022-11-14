<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email  =   auth()->user()->email;
        $user   =   User::where('email',$email)->get();
        foreach ($user as $key) {
            # code...
            $pegawai =   Pegawai::where('npsnSekolah', $key->sekolahProfil['npsn'])->get();
            $npsn   =    $key->sekolahProfil['npsn'];
        }
        return view('dashboard.pegawai',[
            'title'         =>  'Data PTK',
            'npsnSekolah'      =>   $npsn,
            'pegawai' =>  $pegawai,
            'jmlPtk'    => Pegawai::count(),
            'jmlPd'     => Siswa::count()
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
        $validasi   =   $request->validate([
            'npsnSekolah'   =>  'required',
            'idPegawai'     =>  'nullable',
            'namaPegawai'   =>  'required',
            'jk'            =>  'required',
            'jabatan'       =>  'required',
            'golongan'      =>  'required',
            'tempatLahir'   =>  'required',
            'tglLahir'      =>  'required',
            'noHp'          =>  'required',
            'status'        =>  'required',
            'pT'            =>  'required',
        ]);        

        Pegawai::create($validasi);

        return redirect('/profile/dataPtk')->with('succes','Data Pegawai Berhasil Di Tambahkan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        //
    }
}

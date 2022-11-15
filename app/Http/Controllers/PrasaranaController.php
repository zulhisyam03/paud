<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\Siswa;
use App\Models\Prasarana;

class PrasaranaController extends Controller
{
    //
    public function index()
    {
        $email  =   auth()->user()->email;
        $user   =   User::where('email', $email)->get();
        $tglSekarang    =   date('Y');
        foreach ($user as $key) {
            # code...
            $prasarana =   Prasarana::where([['npsnSekolah', $key->sekolahProfil['npsn']],['semester','LIKE','%'.$tglSekarang.'%']])->OrderBy('semester','ASC')->get();
            $npsn      =    $key->sekolahProfil['npsn'];
        }
        return view('dashboard.prasarana', [
            'title'         =>  'Data Prasarana',
            'npsnSekolah'   =>   $npsn,
            'prasarana'     =>  $prasarana,
            'jmlPtk'        => Pegawai::count(),
            'jmlPd'         => Siswa::count(),
            'jmlPrasarana'  => Prasarana::where([['npsnSekolah', $key->sekolahProfil['npsn']],['semester','LIKE','%'.$tglSekarang.'%']])->count()
        ]);
    }
}

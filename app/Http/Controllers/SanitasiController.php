<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Sanitasi;
use App\Models\Prasarana;
use App\Models\Siswa;
use App\Models\Pegawai;

class SanitasiController extends Controller
{
    //
    public function index(){
        $email  =   auth()->user()->email;
        $user   =   User::where('email', $email)->get();
        $tglSekarang    =   date('Y');
        foreach ($user as $key) {
            # code...
            $sanitasi =   Sanitasi::where([['npsnSekolah', $key->sekolahProfil['npsn']],['semester','LIKE','%'.$tglSekarang.'%']])->OrderBy('semester','ASC')->get();
            $npsn      =    $key->sekolahProfil['npsn'];
        }
        return view('dashboard.sanitasi', [
            'title'         =>  'Data Sanitasi',
            'npsnSekolah'   =>   $npsn,
            'sanitasi'     =>  $sanitasi,
            'jmlPtk'        => Pegawai::count(),
            'jmlPd'         => Siswa::count(),
            'jmlPrasarana'  => Prasarana::where([['npsnSekolah', $key->sekolahProfil['npsn']],['semester','LIKE','%'.$tglSekarang.'%']])->Orderby('semester','ASC')->count(),            
            'jmlSanitasi'   => Sanitasi::where([['npsnSekolah', $key->sekolahProfil['npsn']],['semester','LIKE','%'.$tglSekarang.'%']])->Orderby('semester','ASC')->count()            
        ]);
    }
}

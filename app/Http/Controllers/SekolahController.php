<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kontak;
use App\Models\Pegawai;
use App\Models\Sekolah;  
use App\Models\Siswa;  
use App\Models\Prasarana;  
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
        $user   =   User::where('email',$email)->get();
        $tglSekarang    =   date('y');

        foreach ($user as $key) {
            # code...
            $profil =   Sekolah::where('npsn', $key->sekolahProfil['npsn'])->get();
        }
        return view('dashboard.profileSekolah',[
            'title'     =>  'Profile Sekolah',
            'profil'     =>  $user,
            'jmlPtk'    =>  Pegawai::where('npsnSekolah',$key->sekolahProfil['npsn'])->count(),
            'jmlPd'    =>  Siswa::where('npsnSekolah',$key->sekolahProfil['npsn'])->count(),
            'jmlPrasarana'  => Prasarana::where([['npsnSekolah', $key->sekolahProfil['npsn']],['semester','LIKE','%'.$tglSekarang.'%']])->count()
        ]);
    }
    public function editKontak(Sekolah $sekolah)
    {
        $email  =   auth()->user()->email;
        $user   =   User::where('email',$email)->get();
        $tglSekarang    =   date('y');
        foreach ($user as $key) {
            # code...
            $kontak =   Kontak::where('npsn', $key->sekolahProfil['npsn'])->get();
        }
        return view('dashboard.kontakSekolah',[
            'title'     =>  'Kontak Sekolah',
            'kontak'     =>  $kontak,
            'jmlPtk'    =>  Pegawai::count(),
            'jmlPd'     =>  Siswa::count(),
            'jmlPrasarana'  => Prasarana::where([['npsnSekolah', $key->sekolahProfil['npsn']],['semester','LIKE','%'.$tglSekarang.'%']])->count()
        ]);
    }

    public function editPelengkap(){
        $email  =   auth()->user()->email;
        $user   =   User::where('email',$email)->get();
        $tglSekarang    =   date('y');
        foreach ($user as $key) {
            # code...
            $dataPelengkap =   DataPelengkap::where('npsnSekolah', $key->sekolahProfil['npsn'])->get();
        }

        return view('dashboard.dataPelengkap',[
            'title'         =>  'Data Pelengkap',
            'dataPelengkap' =>  $dataPelengkap,
            'jmlPtk'    =>  Pegawai::count(),
            'jmlPd'     =>  Siswa::count(),
            'jmlPrasarana'  => Prasarana::where([['npsnSekolah', $key->sekolahProfil['npsn']],['semester','LIKE','%'.$tglSekarang.'%']])->count()
        ]);
    }

    public function saveDataPelengkap(Request $request){
        $validasi = $request->validate([
            'kkd' => 'required',
            'namaBank' => 'required',
            'cabangBank' => 'required',
            'noRek' => 'required',
            'nama' => 'required'
        ]);
        $email = auth()->user()->email;
        $user = User::where('email',$email)->get();
        foreach($user as $key){        
            $editPelengkap = DataPelengkap::where('npsnSekolah',$key->sekolahProfil['npsn'])->update([
                'kkd' => $validasi['kkd'],
                'namaBank' => $validasi['namaBank'],
                'cabangBank' => $validasi['cabangBank'],
                'noRek' => $validasi['noRek'],
                'nama' => $validasi['nama']
            ]);
        }

        return redirect()->back()->with('success','Data pelengkap berhasil!');
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

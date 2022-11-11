<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $fillable = [
        'npsnSekolah',
        'idPegawai',
        'namaPegawai',
        'tempatLahir',
        'tglLahir',
        'noHp',
        'jk',
        'jabatan',
        'status',
        'golongan',
        'pT',        
    ];

    public function sekolahPegawai(){
        return $this->belongsTo(Sekolah::class,'npsn','npsnSekolah');
    }
}

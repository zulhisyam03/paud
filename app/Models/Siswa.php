<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'npsnSekolah',
        'idSiswa',
        'namaSiswa',
        'jk',
        'tempatLahir',
        'tglLahir',
        'alamat',
        'agama',
        'waliSiswa',
        'hpWali'
    ];

    public function siswaSekolah(){
        return $this->belongsTo(Sekolah::class,'npsn','npsnSekolah');
    }
}

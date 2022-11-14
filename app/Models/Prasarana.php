<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prasarana extends Model
{
    use HasFactory;
    protected $fillable = [
        'npsnSekolah',
        'semester',
        'kelas',
        'perpustakaan',
        'laboratirum',
        'praktik',
        'pimpinan',
        'guru',
        'ibadah',
        'uks',
        'toilet',
        'gudang',
        'sirkulasi',
        'tempatBermain',
        'tu',
        'konseling',
        'osis',
        'bangunan'
    ];
    public function prasaranaSekolah(){
        return $this->belongsTo(Sekolah::class,'npsn','npsnSekolah');
    }
}

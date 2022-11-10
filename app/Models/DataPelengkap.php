<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPelengkap extends Model
{
    use HasFactory;
    protected $fillable = [
        'npsnSekolah',
        'kkd',
        'namaBank',
        'cabangBank',
        'nama'
    ];

    public function sekolahPelengkap(){
        return $this->belongsTo(Sekolah::class,'npsn','npsnSekolah');
    }
}

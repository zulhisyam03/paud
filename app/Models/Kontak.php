<?php

namespace App\Models;

use App\Models\Sekolah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;

    protected $fillable =   [
        'npsn',
        'alamat',
        'rtRw',
        'desa',
        'kecamatan',
        'kabupaten',
        'profinsi',
        'kdPos',
        'lintang',
        'bujur'
    ];

    public function sekolah(){
        return $this->belongsTo(Sekolah::class,'npsn', 'npsn');
    }
}

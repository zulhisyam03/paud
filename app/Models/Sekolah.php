<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kontak;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sekolah extends Model
{
    use HasFactory;

    protected $fillable = [
        'npsn',
        'namaSekolah',
        'status',
        'statusKepemilikan',
        'skPendirian',
        'tglSkPendirian',
        'skIzinOperasional',
        'tglSkOperasional'
    ];    

    public function userAccount(){
        return $this->belongsTo(User::class, 'name','namaSekolah');
    }

    public function kontak(){
        return $this->hasOne(Kontak::class,'npsn', 'npsn');
    }
}

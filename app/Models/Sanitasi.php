<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanitasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'npsnSekolah',
        'semester',
        'sumberAir',
        'sumberAirMinum',
        'airBersih',
        'jambanDifable',
        'tipeJamban',
        'jmlHariCuciTangan',
        'jmlTempatCuciTangan',
        'jmlTempatCuciTanganRusak',
        'airMengalirTempatCuciTangan',
        'saluranLimbaJamban',
        'mengurasSeptik'
    ];
}

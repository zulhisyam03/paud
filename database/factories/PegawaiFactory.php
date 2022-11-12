<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'npsnSekolah'   =>  '654321',
            'idPegawai'     =>  fake()->randomNumber(6,true),
            'namaPegawai'   =>  fake()->name(),
            'tempatLahir'   =>  fake()->address(),
            'tglLahir'      =>  fake()->date('Y-m-d'),
            'noHp'          =>  fake()->phoneNumber(),
            'jk'            =>  fake()->randomElement(['Laki-Laki','Perempuan']),
            'jabatan'       =>  fake()->randomElement(['Guru','Staf TU']),
            'status'        =>  fake()->randomElement(['PNS','Non PNS']),
            'golongan'      =>  fake()->randomElement(['III A', 'III C', 'III D']),
            'pT'            =>  fake()->randomElement(['S1','S2','SMA'])
        ];
    }
}

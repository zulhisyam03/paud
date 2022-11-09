<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->create([
            'name'      =>  'TK Sekolah 1',
            'email'     =>  'example1@gmail.com',
            'password'  =>  bcrypt('123456')
        ]);
        User::factory()->create([
            'name'      =>  'TK Sekolah 2',
            'email'     =>  'example2@gmail.com',
            'password'  =>  bcrypt('123456')
        ]);
        User::factory()->create([
            'name'      =>  'TK Sekolah 3',
            'email'     =>  'example3@gmail.com',
            'password'  =>  bcrypt('123456')
        ]);

        Sekolah::create([
            'npsn'          =>  '654321',
            'namaSekolah'   =>  'TK Sekolah 1' 
        ]);
        Sekolah::create([
            'npsn'          =>  '654322',
            'namaSekolah'   =>  'TK Sekolah 2' 
        ]);
        Sekolah::create([
            'npsn'          =>  '654323',
            'namaSekolah'   =>  'TK Sekolah 3' 
        ]);
    }
}

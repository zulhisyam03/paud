<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DataPelengkap;
use App\Models\Kontak;
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
            'npsn'                  =>  '654321',
            'namaSekolah'           =>  'TK Sekolah 1',
            'akreditas'             =>  'Akreditasi B',
            'kurikulum'             =>  'Kurikulum 2013',
            'status'                =>  "Swasta",
            'bentukPendidikan'      =>  "TK",
            'statusKepemilikan'     =>  "Yayasan",
            'skPendirian'           =>  "1029/HK.5/Dikpora/SG/2011",
            'tglSkPendirian'        =>  "2011-05-11",
            'skIzinOperasional'     =>  "420.1/05/DPMPTSP.SG/II/2022",
            'tglSkOperasional'      =>  "2021-04-07",
        ]);
        Sekolah::create([
            'npsn'                  =>  '654322',
            'namaSekolah'           =>  'TK Sekolah 2',
            'akreditas'             =>  'Akreditasi B',
            'kurikulum'             =>  'Kurikulum 2013',
            'status'                =>  "Swasta",
            'bentukPendidikan'      =>  "TK",
            'statusKepemilikan'     =>  "Lainnya",
            'skPendirian'           =>  "1029/HK.5/Dikpora/SG/2011",
            'tglSkPendirian'        =>  "2011-05-11",
            'skIzinOperasional'     =>  "420.1/05/DPMPTSP.SG/II/2022",
            'tglSkOperasional'      =>  "2021-04-07",
        ]);
        Sekolah::create([
            'npsn'                  =>  '654323',
            'namaSekolah'           =>  'TK Sekolah 3',
            'akreditas'             =>  'Akreditasi B',
            'kurikulum'             =>  'Kurikulum 2013',
            'status'                =>  "Swasta",
            'bentukPendidikan'      =>  "TK",
            'statusKepemilikan'     =>  "Yayasan",
            'skPendirian'           =>  "823.3/320 -SB",
            'tglSkPendirian'        =>  "2007-07-10",
            'skIzinOperasional'     =>  "2147483647",
            'tglSkOperasional'      =>  "2019-09-09",
        ]);

        Kontak::create([
            'npsn'       =>  '654321',
            'alamat'     =>  'JL.Impian No.5',
            'dusun'      =>  'DUSUN I',
            'desa'       =>  'Kebanggaan',
            'rtRw'       =>  '02/12',
            'kecamatan'  =>  'Bahagia',
            'kabupaten'  =>  'Indah',
            'provinsi'   =>  'Keselamatan',
            'kdPos'      =>  '45633',
            'lintang'    =>  '-1',
            'bujur'      =>  '110',
        ]);
        Kontak::create([
            'npsn'       =>  '654322',
            'alamat'     =>  'JL.Impian No.25',
            'dusun'      =>  'DUSUN I',
            'desa'       =>  'Kebanggaan',
            'rtRw'       =>  '02/12',
            'kecamatan'  =>  'Bahagia',
            'kabupaten'  =>  'Indah',
            'provinsi'   =>  'Keselamatan',
            'kdPos'      =>  '45633',
            'lintang'    =>  '-1',
            'bujur'      =>  '110',
        ]);
        Kontak::create([
            'npsn'       =>  '654323',
            'alamat'     =>  'JL.Impian No.10',
            'dusun'      =>  'DUSUN I',
            'desa'       =>  'Kebanggaan',
            'rtRw'       =>  '02/12',
            'kecamatan'  =>  'Bahagia',
            'kabupaten'  =>  'Indah',
            'provinsi'   =>  'Keselamatan',
            'kdPos'      =>  '45633',
            'lintang'    =>  '-1',
            'bujur'      =>  '110',
        ]);

        DataPelengkap::create([
            'npsnSekolah'   =>  '654321'
        ]);
        DataPelengkap::create([
            'npsnSekolah'   =>  '654322'
        ]);
        DataPelengkap::create([
            'npsnSekolah'   =>  '654323'
        ]);
    }
}

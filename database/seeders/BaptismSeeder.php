<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BaptismSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('baptisms')->insert([
            'nomorsuratbaptis' => '00000',
            'nama' => 'Everald Tumalang',
            'tanggallahir' => '16 Agustus 2002',
            'namaayah' => 'Barry Tumalang',
            'namaibu' => 'Naomi Tumalang',
            'dibaptisoleh' => 'Pnt. Bpk. Mesak Nababan',
            'tanggalbaptis' => '15 November 2019',
        ]);
    }
}
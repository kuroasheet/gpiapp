<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeddingSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('weddings')->insert([
            'nomorsuratnikah' => '00000',
            'namapasangan' => 'Bpk. Goku & Ibu Chichi',
            'tanggalmenikah' => '7 Mei 2012',
        ]);
    }
}

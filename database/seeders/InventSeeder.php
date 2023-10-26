<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('invents')->insert([
            'namabarang' => '7 Kesaksian Surga & Neraka',
            'volume' => 'Satu',
            'tahun' => '2010',
            'sumber' => '-',
            'nilai' => '-',
            'kondisi' => 'Bagus',
        ]);
    }
}
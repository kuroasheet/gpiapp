<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonthSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('months')->insert([
            'bulan' => 'Agustus 2023',
            'pemasukan' => 'Rp. 875.000',
            'pengeluaran' => 'Rp. 500.000',
        ]);
    }
}

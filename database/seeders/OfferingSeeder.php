<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferingSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('offerings')->insert([
            'tanggal' => '13 Agustus 2023',
            'kas' => '-',
            'misi' => '-',
            'diakonia' => '-',
            'ibadahrayatghminggu' => '-',
        ]);
    }
}

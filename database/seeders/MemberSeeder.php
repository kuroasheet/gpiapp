<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('members')->insert([
            'nama' => 'Everald Tumalang',
            'tanggallahir' => '16 Agustus',
            'jeniskelamin' => 'Laki-laki',
            'alamat' => 'Wainitu',
            'pekerjaan' => '-',
            'tahunbergabung' => '2010',
        ]);
    }
}

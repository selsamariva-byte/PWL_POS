<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class levelseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['level_id' => 1, 'level_kode' => 'ADM', 'level_nama' => 'adminstrator'],
            ['level_id' => 2, 'level_kode' => 'MNG', 'level_nama' => 'manajer'],
            ['level_id' => 3, 'level_kode' => 'STF', 'level_nama' => 'staff/kasir'],
            ["level_id" => 4, "level_kode" => "GST", "level_nama" => "pelanggan pertama"]
        ];
        DB::table('m_level')->insert($data);
    }
}

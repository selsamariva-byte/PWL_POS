<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class m_StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'stok_id' => 1,
                'barang_id' => 1,
                'stok_tanggal' => '2023-01-01',
                'stok_masuk' => 100,
                'stok_keluar' => 20,
                'stok_sisa' => 80
            ],
            [
                'stok_id' => 2,
                'barang_id' => 2,
                'stok_tanggal' => '2023-01-02',
                'stok_masuk' => 200,
                'stok_keluar' => 50,
                'stok_sisa' => 150
            ],
            [
                'stok_id' => 3,
                'barang_id' => 3,
                'stok_tanggal' => '2023-01-03',
                'stok_masuk' => 150,
                'stok_keluar' => 30,
                'stok_sisa' => 120
            ],
            [
                'stok_id' => 4,
                'barang_id' => 4,
                'stok_tanggal' => '2023-01-04',
                'stok_masuk' => 80,
                'stok_keluar' => 10,
                'stok_sisa' => 70
            ],
            [
                'stok_id' => 5,
                'barang_id' => 5,
                'stok_tanggal' => '2023-01-05',
                'stok_masuk' => 60,
                'stok_keluar' => 15,
                'stok_sisa' => 45
            ],
            [
                'stok_id' => 6,
                'barang_id' => 6,
                'stok_tanggal' => '2023-01-06',
                'stok_masuk' => 250,
                'stok_keluar' => 40,
                'stok_sisa' => 210
            ],
            [
                'stok_id' => 7,
                'barang_id' => 7,
                'stok_tanggal' => '2023-01-07',
                'stok_masuk' => 90,
                'stok_keluar' => 20,
                'stok_sisa' => 70
            ],
            [
                'stok_id' => 8,
                'barang_id' => 8,
                'stok_tanggal' => '2023-01-08',
                'stok_masuk' => 130,
                'stok_keluar' => 25,
                'stok_sisa' => 105
            ],
            [
                'stok_id' => 9,
                'barang_id' => 9,
                'stok_tanggal' => '2023-01-09',
                'stok_masuk' => 40,
                'stok_keluar' => 5,
                'stok_sisa' => 35
            ],
            [
                'stok_id' => 10,
                'barang_id' => 10,
                'stok_tanggal' => '2023-01-10',
                'stok_masuk' => 300,
                'stok_keluar' => 60,
                'stok_sisa' => 240

            ],
            [
                'stok_id' => 11,
                'barang_id' => 11,
                'stok_tanggal' => '2023-01-11',
                'stok_masuk' => 120,
                'stok_keluar' => 20,
                'stok_sisa' => 100
            ],
            [
                'stok_id' => 12,
                'barang_id' => 12,
                'stok_tanggal' => '2023-01-12',
                'stok_masuk' => 180,
                'stok_keluar' => 30,
                'stok_sisa' => 150
            ],
            [
                'stok_id' => 13,
                'barang_id' => 13,
                'stok_tanggal' => '2023-01-13',
                'stok_masuk' => 110,
                'stok_keluar' => 15,
                'stok_sisa' => 95
            ],
            [
                'stok_id' => 14,
                'barang_id' => 14,
                'stok_tanggal' => '2023-01-14',
                'stok_masuk' => 50,
                'stok_keluar' => 8,
                'stok_sisa' => 42
            ],
            [
                'stok_id' => 15,
                'barang_id' => 15,
                'stok_tanggal' => '2023-01-15',
                'stok_masuk' => 220,
                'stok_keluar' => 35,
                'stok_sisa' => 185
            ]
        ];
        DB::table('t_stok')->insert($data);
    }
}

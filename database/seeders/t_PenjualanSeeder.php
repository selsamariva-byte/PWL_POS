<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class m_PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'penjualan_tanggal' => '2023-10-01',
                'user_id' => 3,
                'total_item' => 5,
                'total_harga' => 75000,
                'bayar' => 80000,
                'kembali' => 5000
            ],
            [
                'penjualan_id' => 2,
                'penjualan_tanggal' => '2023-10-02',
                'user_id' => 3,
                'total_item' => 3,
                'total_harga' => 45000,
                'bayar' => 50000,
                'kembali' => 5000
            ],
            [
                'penjualan_id' => 3,
                'penjualan_tanggal' => '2023-10-03',
                'user_id' => 2,
                'total_item' => 4,
                'total_harga' => 60000,
                'bayar' => 70000,
                'kembali' => 10000
            ],
            [
                'penjualan_id' => 4,
                'penjualan_tanggal' => '2023-10-04',
                'user_id' => 2,
                'total_item' => 2,
                'total_harga' => 30000,
                'bayar' => 40000,
                'kembali' => 10000
            ],
            [
                'penjualan_id' => 5,
                'penjualan_tanggal' => '2023-10-05',
                'user_id' => 1,
                'total_item' => 6,
                'total_harga' => 90000,
                'bayar' => 100000,
                'kembali' => 10000
            ] .
                [
                    'penjualan_id' => 6,
                    'penjualan_tanggal' => '2023-10-06',
                    'user_id' => 1,
                    'total_item' => 7,
                    'total_harga' => 105000,
                    'bayar' => 110000,
                    'kembali' => 5000
                ],
            [
                'penjualan_id' => 7,
                'penjualan_tanggal' => '2023-10-07',
                'user_id' => 3,
                'total_item' => 1,
                'total_harga' => 15000,
                'bayar' => 20000,
                'kembali' => 5000
            ],
            [
                'penjualan_id' => 8,
                'penjualan_tanggal' => '2023-10-08',
                'user_id' => 2,
                'total_item' => 8,
                'total_harga' => 120000,
                'bayar' => 130000,
                'kembali' => 10000
            ],
            [
                'penjualan_id' => 9,
                'penjualan_tanggal' => '2023-10-09',
                'user_id' => 1,
                'total_item' => 9,
                'total_harga' => 135000,
                'bayar' => 140000,
                'kembali' => 5000
            ],
            [
                'penjualan_id' => 10,
                'penjualan_tanggal' => '2023-10-10',
                'user_id' => 3,
                'total_item' => 10,
                'total_harga' => 150000,
                'bayar' => 160000,
                'kembali' => 10000
            ],
        ];
        DB::table('m_penjualan')->insert($data);
    }
}

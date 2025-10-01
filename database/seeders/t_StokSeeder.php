<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class t_StokSeeder extends Seeder
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
                'supplier_id' => 1,
                'user_id' => 1,
                'stok_tanggal' => '2023-01-01',
                'stok_jumlah' => 20,
                'created_at' => now(),
                'updated_at' => now()


            ],
            [
                'stok_id' => 2,
                'barang_id' => 2,
                'supplier_id' => 2,
                'user_id' => 2,
                'stok_tanggal' => '2023-01-02',
                'stok_jumlah' => 200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stok_id' => 3,
                'barang_id' => 3,
                'supplier_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2023-01-03',
                'stok_jumlah' => 150,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stok_id' => 4,
                'barang_id' => 4,
                'supplier_id' => 1,
                'user_id' => 1,
                'stok_tanggal' => '2023-01-04',
                'stok_jumlah' => 75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stok_id' => 5,
                'barang_id' => 2,
                'supplier_id' => 2,
                'user_id' => 1,
                'stok_tanggal' => '2023-01-05',
                'stok_jumlah' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stok_id' => 6,
                'barang_id' => 6,
                'supplier_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2023-01-06',
                'stok_jumlah' => 120,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stok_id' => 7,
                'barang_id' => 7,
                'supplier_id' => 1,
                'user_id' => 1,
                'stok_tanggal' => '2023-01-07',
                'stok_jumlah' => 300,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stok_id' => 8,
                'barang_id' => 8,
                'supplier_id' => 2,
                'user_id' => 1,
                'stok_tanggal' => '2023-01-08',
                'stok_jumlah' => 180,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stok_id' => 9,
                'barang_id' => 9,
                'supplier_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2023-01-09',
                'stok_jumlah' => 90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stok_id' => 10,
                'barang_id' => 10,
                'supplier_id' => 1,
                'user_id' => 1,
                'stok_tanggal' => '2023-01-10',
                'stok_jumlah' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stok_id' => 11,
                'barang_id' => 1,
                'supplier_id' => 2,
                'user_id' => 1,
                'stok_tanggal' => '2023-01-11',
                'stok_jumlah' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stok_id' => 12,
                'barang_id' => 12,
                'supplier_id' => 2,
                'user_id' => 1,
                'stok_tanggal' => '2023-01-12',
                'stok_jumlah' => 250,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stok_id' => 13,
                'barang_id' => 3,
                'supplier_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2023-01-13',
                'stok_jumlah' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stok_id' => 14,
                'barang_id' => 4,
                'supplier_id' => 1,
                'user_id' => 1,
                'stok_tanggal' => '2023-01-14',
                'stok_jumlah' => 80,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stok_id' => 15,
                'barang_id' => 5,
                'supplier_id' => 2,
                'user_id' => 1,
                'stok_tanggal' => '2023-01-15',
                'stok_jumlah' => 70,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        DB::table('t_stok')->insert($data);
    }
}

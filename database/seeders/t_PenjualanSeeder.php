<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class t_PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'penjualan_tanggal' => '2023-10-01',
                'pembeli' => 'John Doe',
                'penjualan_kode' => 'PJ001',
                'penjualan_tanggal' => '2023-10-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2,
                'penjualan_tanggal' => '2023-10-02',
                'pembeli' => 'Jane Smith',
                'penjualan_kode' => 'PJ002',
                'penjualan_tanggal' => '2023-10-02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 1,
                'penjualan_tanggal' => '2023-10-03',
                'pembeli' => 'Alice Johnson',
                'penjualan_kode' => 'PJ003',
                'penjualan_tanggal' => '2023-10-03',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 2,
                'penjualan_tanggal' => '2023-10-04',
                'pembeli' => 'Bob Brown',
                'penjualan_kode' => 'PJ004',
                'penjualan_tanggal' => '2023-10-04',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 1,
                'penjualan_tanggal' => '2023-10-05',
                'pembeli' => 'Charlie Davis',
                'penjualan_kode' => 'PJ005',
                'penjualan_tanggal' => '2023-10-05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 2,
                'penjualan_tanggal' => '2023-10-06',
                'pembeli' => 'Diana Evans',
                'penjualan_kode' => 'PJ006',
                'penjualan_tanggal' => '2023-10-06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'penjualan_tanggal' => '2023-10-07',
                'pembeli' => 'Ethan Foster',
                'penjualan_kode' => 'PJ007',
                'penjualan_tanggal' => '2023-10-07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 2,
                'penjualan_tanggal' => '2023-10-08',
                'pembeli' => 'Fiona Green',

                'penjualan_kode' => 'PJ008',
                'penjualan_tanggal' => '2023-10-08',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 1,
                'penjualan_tanggal' => '2023-10-09',
                'pembeli' => 'George Harris',
                'penjualan_kode' => 'PJ009',
                'penjualan_tanggal' => '2023-10-09',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 2,
                'penjualan_tanggal' => '2023-10-10',
                'pembeli' => 'Hannah Irvine',
                'penjualan_kode' => 'PJ010',
                'penjualan_tanggal' => '2023-10-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}

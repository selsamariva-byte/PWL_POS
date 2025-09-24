<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class t_penjualan_detailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_detail_id' => 1,
                'penjualan_id' => 1,
                'barang_id' => 1,
                'penjualan_detail_harga_jual' => 15000,
                'penjualan_detail_jumlah' => 2,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 30000
            ],
            [
                'penjualan_detail_id' => 2,
                'penjualan_id' => 1,
                'barang_id' => 3,
                'penjualan_detail_harga_jual' => 11000,
                'penjualan_detail_jumlah' => 1,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 11000
            ],
            [
                'penjualan_detail_id' => 3,
                'penjualan_id' => 2,
                'barang_id' => 2,
                'penjualan_detail_harga_jual' => 10000,
                'penjualan_detail_jumlah' => 3,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 30000
            ],
            [
                'penjualan_detail_id' => 4,
                'penjualan_id' => 3,
                'barang_id' => 4,
                'penjualan_detail_harga_jual' => 5000,
                'penjualan_detail_jumlah' => 4,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 20000
            ],
            [
                'penjualan_detail_id' => 5,
                'penjualan_id' => 4,
                'barang_id' => 5,
                'penjualan_detail_harga_jual' => 60000,
                'penjualan_detail_jumlah' => 2,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 120000
            ],
            [
                'penjualan_detail_id' => 6,
                'penjualan_id' => 5,
                'barang_id' => 6,
                'penjualan_detail_harga_jual' => 5000,
                'penjualan_detail_jumlah' => 6,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 30000
            ],
            [
                'penjualan_detail_id' => 7,
                'penjualan_id' => 6,
                'barang_id' => 7,
                'penjualan_detail_harga_jual' => 15000,
                'penjualan_detail_jumlah' => 7,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 105000
            ],
            [
                'penjualan_detail_id' => 8,
                'penjualan_id' => 7,
                'barang_id' => 8,
                'penjualan_detail_harga_jual' => 20000,
                'penjualan_detail_jumlah' => 5,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 100000
            ],
            [
                'penjualan_detail_id' => 9,
                'penjualan_id' => 8,
                'barang_id' => 9,
                'penjualan_detail_harga_jual' => 60000,
                'penjualan_detail_jumlah' => 3,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 180000
            ] .
                [
                    'penjualan_detail_id' => 10,
                    'penjualan_id' => 9,
                    'barang_id' => 10,
                    'penjualan_detail_harga_jual' => 5000,
                    'penjualan_detail_jumlah' => 4,
                    'penjualan_detail_diskon' => 0,
                    'penjualan_detail_subtotal' => 20000
                ],
            [
                'penjualan_detail_id' => 11,
                'penjualan_id' => 10,
                'barang_id' => 11,
                'penjualan_detail_harga_jual' => 15000,
                'penjualan_detail_jumlah' => 2,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 30000
            ],
            [
                'penjualan_detail_id' => 12,
                'penjualan_id' => 11,
                'barang_id' => 12,
                'penjualan_detail_harga_jual' => 10000,
                'penjualan_detail_jumlah' => 6,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 60000
            ],
            [
                'penjualan_detail_id' => 13,
                'penjualan_id' => 12,
                'barang_id' => 13,
                'penjualan_detail_harga_jual' => 11000,
                'penjualan_detail_jumlah' => 1,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 11000
            ],
            [
                'penjualan_detail_id' => 14,
                'penjualan_id' => 13,
                'barang_id' => 14,
                'penjualan_detail_harga_jual' => 100000,
                'penjualan_detail_jumlah' => 3,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 300000
            ],
            [
                'penjualan_detail_id' => 15,
                'penjualan_id' => 14,
                'barang_id' => 15,
                'penjualan_detail_harga_jual' => 12000,
                'penjualan_detail_jumlah' => 5,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 60
            ],
            [
                'penjualan_detail_id' => 16,
                'penjualan_id' => 15,
                'barang_id' => 1,
                'penjualan_detail_harga_jual' => 15000,
                'penjualan_detail_jumlah' => 4,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 60000
            ],
            [
                'penjualan_detail_id' => 17,
                'penjualan_id' => 16,
                'barang_id' => 2,
                'penjualan_detail_harga_jual' => 10000,
                'penjualan_detail_jumlah' => 3,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 30000
            ],
            [
                'penjualan_detail_id' => 18,
                'penjualan_id' => 17,
                'barang_id' => 3,
                'penjualan_detail_harga_jual' => 11000,
                'penjualan_detail_jumlah' => 2,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 22000
            ],
            [
                'penjualan_detail_id' => 19,
                'penjualan_id' => 18,
                'barang_id' => 4,
                'penjualan_detail_harga_jual' => 5000,
                'penjualan_detail_jumlah' => 5,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 25000
            ],
            [
                'penjualan_detail_id' => 20,
                'penjualan_id' => 19,
                'barang_id' => 5,
                'penjualan_detail_harga_jual' => 60000,
                'penjualan_detail_jumlah' => 1,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 60000
            ],
            [
                'penjualan_detail_id' => 21,
                'penjualan_id' => 20,
                'barang_id' => 6,
                'penjualan_detail_harga_jual' => 5000,
                'penjualan_detail_jumlah' => 8,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 40000
            ],
            [
                'penjualan_detail_id' => 22,
                'penjualan_id' => 21,
                'barang_id' => 7,
                'penjualan_detail_harga_jual' => 15000,
                'penjualan_detail_jumlah' => 2,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 30000
            ],
            [
                'penjualan_detail_id' => 23,
                'penjualan_id' => 22,
                'barang_id' => 8,
                'penjualan_detail_harga_jual' => 20000,
                'penjualan_detail_jumlah' => 4,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 80000
            ],
            [
                'penjualan_detail_id' => 24,
                'penjualan_id' => 23,
                'barang_id' => 9,
                'penjualan_detail_harga_jual' => 60000,
                'penjualan_detail_jumlah' => 2,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 120000
            ],
            [
                'penjualan_detail_id' => 25,
                'penjualan_id' => 24,
                'barang_id' => 10,
                'penjualan_detail_harga_jual' => 5000,
                'penjualan_detail_jumlah' => 6,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 30000
            ],
            [
                'penjualan_detail_id' => 26,
                'penjualan_id' => 25,
                'barang_id' => 11,
                'penjualan_detail_harga_jual' => 15000,
                'penjualan_detail_jumlah' => 3,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 45000
            ],
            [
                'penjualan_detail_id' => 27,
                'penjualan_id' => 26,
                'barang_id' => 12,
                'penjualan_detail_harga_jual' => 10000,
                'penjualan_detail_jumlah' => 4,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 40000
            ],
            [
                'penjualan_detail_id' => 28,
                'penjualan_id' => 27,
                'barang_id' => 13,
                'penjualan_detail_harga_jual' => 11000,
                'penjualan_detail_jumlah' => 3,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 33000
            ],
            [
                'penjualan_detail_id' => 29,
                'penjualan_id' => 28,
                'barang_id' => 14,
                'penjualan_detail_harga_jual' => 100000,
                'penjualan_detail_jumlah' => 1,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 100000
            ],
            [
                'penjualan_detail_id' => 30,
                'penjualan_id' => 29,
                'barang_id' => 15,
                'penjualan_detail_harga_jual' => 12000,
                'penjualan_detail_jumlah' => 2,
                'penjualan_detail_diskon' => 0,
                'penjualan_detail_subtotal' => 24000
            ],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}

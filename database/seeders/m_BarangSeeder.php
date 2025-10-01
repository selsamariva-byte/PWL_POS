<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class m_BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'supplier_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Indomie Goreng',
                'harga_beli' => 2500,
                'harga_jual' => 3000,

            ],
            [
                'barang_id' => 2,
                'kategori_id' => 2,
                'supplier_id' => 2,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Teh Botol Sosro',
                'harga_beli' => 4000,
                'harga_jual' => 5000,

            ],
            [
                'barang_id' => 3,
                'kategori_id' => 3,
                'supplier_id' => 3,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Chitato',
                'harga_beli' => 6000,
                'harga_jual' => 7500,

            ],
            [
                'barang_id' => 4,
                'kategori_id' => 4,
                'supplier_id' => 1,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Kaos Polos',
                'harga_beli' => 20000,
                'harga_jual' => 25000,

            ],
            [
                'barang_id' => 5,
                'kategori_id' => 5,
                'supplier_id' => 2,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Pulpen',
                'harga_beli' => 1500,
                'harga_jual' => 2000,

            ],
            [
                'barang_id' => 6,
                'kategori_id' => 1,
                'supplier_id' => 3,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Biskuit',
                'harga_beli' => 5000,
                'harga_jual' => 6500,

            ],
            [
                'barang_id' => 7,
                'kategori_id' => 2,
                'supplier_id' => 1,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Aqua 600ml',
                'harga_beli' => 3000,
                'harga_jual' => 4000,

            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3,
                'supplier_id' => 2,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Taro',
                'harga_beli' => 7000,
                'harga_jual' => 8500,

            ],
            [
                'barang_id' => 9,
                'kategori_id' => 4,
                'supplier_id' => 3,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Kemeja',
                'harga_beli' => 50000,
                'harga_jual' => 60000,

            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'supplier_id' => 1,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Buku Tulis',
                'harga_beli' => 4000,
                'harga_jual' => 5000,

            ],
            [
                'barang_id' => 11,
                'kategori_id' => 1,
                'supplier_id' => 2,
                'barang_kode' => 'BRG011',
                'barang_nama' => 'Sari Roti',
                'harga_beli' => 12000,
                'harga_jual' => 15000,

            ],
            [
                'barang_id' => 12,
                'kategori_id' => 2,
                'supplier_id' => 3,
                'barang_kode' => 'BRG012',
                'barang_nama' => 'Coca Cola',
                'harga_beli' => 8000,
                'harga_jual' => 10000,

            ],
            [
                'barang_id' => 13,
                'kategori_id' => 3,
                'supplier_id' => 1,
                'barang_kode' => 'BRG013',
                'barang_nama' => 'Oreo',
                'harga_beli' => 9000,
                'harga_jual' => 11000,

            ],
            [
                'barang_id' => 14,
                'kategori_id' => 4,
                'supplier_id' => 2,
                'barang_kode' => 'BRG014',
                'barang_nama' => 'Jaket',
                'harga_beli' => 80000,
                'harga_jual' => 100000,

            ],
            [
                'barang_id' => 15,
                'kategori_id' => 5,
                'supplier_id' => 3,
                'barang_kode' => 'BRG015',
                'barang_nama' => 'Stapler',
                'harga_beli' => 10000,
                'harga_jual' => 12000,
            ]
        ];
        DB::table('m_barang')->insert($data);
    }
}

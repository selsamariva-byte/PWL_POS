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
                'barang_harga_beli' => 2500,
                'barang_harga_jual' => 3000,
                'barang_stok' => 100
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 2,
                'supplier_id' => 2,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Teh Botol Sosro',
                'barang_harga_beli' => 4000,
                'barang_harga_jual' => 5000,
                'barang_stok' => 150
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 3,
                'supplier_id' => 3,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Chitato',
                'barang_harga_beli' => 6000,
                'barang_harga_jual' => 7500,
                'barang_stok' => 200
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 4,
                'supplier_id' => 1,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Kaos Polos',
                'barang_harga_beli' => 20000,
                'barang_harga_jual' => 25000,
                'barang_stok' => 50
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 5,
                'supplier_id' => 2,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Pulpen',
                'barang_harga_beli' => 1500,
                'barang_harga_jual' => 2000,
                'barang_stok' => 300
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 1,
                'supplier_id' => 3,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Biskuit',
                'barang_harga_beli' => 5000,
                'barang_harga_jual' => 6500,
                'barang_stok' => 120
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 2,
                'supplier_id' => 1,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Aqua 600ml',
                'barang_harga_beli' => 3000,
                'barang_harga_jual' => 4000,
                'barang_stok' => 180
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3,
                'supplier_id' => 2,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Taro',
                'barang_harga_beli' => 7000,
                'barang_harga_jual' => 8500,
                'barang_stok' => 90
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 4,
                'supplier_id' => 3,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Kemeja',
                'barang_harga_beli' => 50000,
                'barang_harga_jual' => 60000,
                'barang_stok' => 40
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'supplier_id' => 1,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Buku Tulis',
                'barang_harga_beli' => 4000,
                'barang_harga_jual' => 5000,
                'barang_stok' => 250
            ],
            [
                'barang_id' => 11,
                'kategori_id' => 1,
                'supplier_id' => 2,
                'barang_kode' => 'BRG011',
                'barang_nama' => 'Sari Roti',
                'barang_harga_beli' => 12000,
                'barang_harga_jual' => 15000,
                'barang_stok' => 80
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 2,
                'supplier_id' => 3,
                'barang_kode' => 'BRG012',
                'barang_nama' => 'Coca Cola',
                'barang_harga_beli' => 8000,
                'barang_harga_jual' => 10000,
                'barang_stok' => 130
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 3,
                'supplier_id' => 1,
                'barang_kode' => 'BRG013',
                'barang_nama' => 'Oreo',
                'barang_harga_beli' => 9000,
                'barang_harga_jual' => 11000,
                'barang_stok' => 110
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 4,
                'supplier_id' => 2,
                'barang_kode' => 'BRG014',
                'barang_nama' => 'Jaket',
                'barang_harga_beli' => 80000,
                'barang_harga_jual' => 100000,
                'barang_stok' => 30
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 5,
                'supplier_id' => 3,
                'barang_kode' => 'BRG015',
                'barang_nama' => 'Stapler',
                'barang_harga_beli' => 10000,
                'barang_harga_jual' => 12000,
                'barang_stok' => 220
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}

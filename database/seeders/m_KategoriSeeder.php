<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class m_KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'MKN',
                'kategori_nama' => 'makanan'
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'MNM',
                'kategori_nama' => 'minuman'
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'SNK',
                'kategori_nama' => 'snack'
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'BJI',
                'kategori_nama' => 'baju'
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'PRK',
                'kategori_nama' => 'peralatan kantor'
            ]
        ];
        DB::table('m_kategori')->insert($data);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class m_SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 'S001',
                'supplier_nama' => 'Supplier A',
                'supplier_alamat' => 'Jl. Merdeka No. 1',
                'supplier_telepon' => '081234567890',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'S002',
                'supplier_nama' => 'Supplier B',
                'supplier_alamat' => 'Jl. Sudirman No. 2',
                'supplier_telepon' => '082345678901',
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'S003',
                'supplier_nama' => 'Supplier C',
                'supplier_alamat' => 'Jl. Thamrin No. 3',
                'supplier_telepon' => '083456789012',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        DB::table('m_supplier')->insert($data);
    }
}

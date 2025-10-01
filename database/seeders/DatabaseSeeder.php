<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LevelSeeder::class,
            UserSeeder::class,
            m_KategoriSeeder::class,
            m_SupplierSeeder::class,
            m_BarangSeeder::class,
            t_StokSeeder::class,
            t_PenjualanSeeder::class,
            t_Penjualan_DetailSeeder::class,
        ]);
    }
}

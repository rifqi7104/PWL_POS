<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $data = [
            ['penjualan_id' => 1, 'user_id' => 3, 'pembeli' => 'Pembeli 1', 'penjualan_kode' => 'P01', 'penjualan_tanggal' =>'2025-02-24 03:00:00'],
            ['penjualan_id' => 2, 'user_id' => 3, 'pembeli' => 'Pembeli 2', 'penjualan_kode' => 'P02', 'penjualan_tanggal' =>'2025-02-24 03:05:00'],
            ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Pembeli 3', 'penjualan_kode' => 'P03', 'penjualan_tanggal' =>'2025-02-24 03:10:00'],
            ['penjualan_id' => 4, 'user_id' => 3, 'pembeli' => 'Pembeli 4', 'penjualan_kode' => 'P04', 'penjualan_tanggal' =>'2025-02-24 03:15:00'],
            ['penjualan_id' => 5, 'user_id' => 3, 'pembeli' => 'Pembeli 5', 'penjualan_kode' => 'P05', 'penjualan_tanggal' =>'2025-02-24 03:20:00'],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'Pembeli 6', 'penjualan_kode' => 'P06', 'penjualan_tanggal' =>'2025-02-24 03:25:00'],
            ['penjualan_id' => 7, 'user_id' => 3, 'pembeli' => 'Pembeli 7', 'penjualan_kode' => 'P07', 'penjualan_tanggal' =>'2025-02-24 03:30:00'],
            ['penjualan_id' => 8, 'user_id' => 3, 'pembeli' => 'Pembeli 8', 'penjualan_kode' => 'P08', 'penjualan_tanggal' =>'2025-02-24 03:35:00'],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Pembeli 9', 'penjualan_kode' => 'P09', 'penjualan_tanggal' =>'2025-02-24 03:40:00'],
            ['penjualan_id' => 10, 'user_id' => 3, 'pembeli' => 'Pembeli 10', 'penjualan_kode' => 'P10', 'penjualan_tanggal' =>'2025-02-24 03:45:00']
        ];
        DB::table('t_penjualan')->insert($data);
    }
}

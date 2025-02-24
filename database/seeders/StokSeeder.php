<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data lama sebelum insert
        DB::table('t_stok')->truncate();
        
        $data = [
            // Stok dari Supplier 1
            ['stok_id' => 1, 'supplier_id' => 1, 'barang_id' => 1, 'user_id' => 1, 'stok_tanggal' => '2025-02-24 03:06:39', 'stok_jumlah' => 1000],
            ['stok_id' => 2, 'supplier_id' => 1, 'barang_id' => 2, 'user_id' => 1, 'stok_tanggal' => '2025-02-24 03:06:39', 'stok_jumlah' => 500],
            ['stok_id' => 3, 'supplier_id' => 1, 'barang_id' => 3, 'user_id' => 1, 'stok_tanggal' => '2025-02-24 03:06:39', 'stok_jumlah' => 200],
            ['stok_id' => 4, 'supplier_id' => 1, 'barang_id' => 4, 'user_id' => 1, 'stok_tanggal' => '2025-02-24 03:06:39', 'stok_jumlah' => 300],
            ['stok_id' => 5, 'supplier_id' => 1, 'barang_id' => 5, 'user_id' => 1, 'stok_tanggal' => '2025-02-24 03:06:39', 'stok_jumlah' => 400],
            // Stok dari Supplier 2
            ['stok_id' => 6, 'supplier_id' => 2, 'barang_id' => 6, 'user_id' => 1, 'stok_tanggal' => '2025-02-24 03:06:39', 'stok_jumlah' => 600],
            ['stok_id' => 7, 'supplier_id' => 2, 'barang_id' => 7, 'user_id' => 1, 'stok_tanggal' => '2025-02-24 03:06:39', 'stok_jumlah' => 700],
            ['stok_id' => 8, 'supplier_id' => 2, 'barang_id' => 8, 'user_id' => 1, 'stok_tanggal' => '2025-02-24 03:06:39', 'stok_jumlah' => 800],
            ['stok_id' => 9, 'supplier_id' => 2, 'barang_id' => 9, 'user_id' => 1, 'stok_tanggal' => '2025-02-24 03:06:39', 'stok_jumlah' => 900],
            ['stok_id' => 10, 'supplier_id' => 2, 'barang_id' => 10, 'user_id' => 1, 'stok_tanggal' => '2025-02-24 03:06:39', 'stok_jumlah' => 100],
            // Stok dari Supplier 3
            ['stok_id' => 11, 'supplier_id' => 3, 'barang_id' => 11, 'user_id' => 1, 'stok_tanggal' => '2025-02-24 03:06:39', 'stok_jumlah' => 1100],
            ['stok_id' => 12, 'supplier_id' => 3, 'barang_id' => 12, 'user_id' => 1, 'stok_tanggal' => '2025-02-24 03:06:39', 'stok_jumlah' => 1200],
            ['stok_id' => 13, 'supplier_id' => 3, 'barang_id' => 13, 'user_id' => 1, 'stok_tanggal' => '2025-02-24 03:06:39', 'stok_jumlah' => 1300],
            ['stok_id' => 14, 'supplier_id' => 3, 'barang_id' => 14, 'user_id' => 1, 'stok_tanggal' => '2025-02-24 03:06:39', 'stok_jumlah' => 1300],
            ['stok_id' => 15, 'supplier_id' => 3, 'barang_id' => 15, 'user_id' => 1, 'stok_tanggal' => '2025-02-24 03:06:39', 'stok_jumlah' => 1300],
        ];
        DB::table('t_stok')->insert($data);
    }
}

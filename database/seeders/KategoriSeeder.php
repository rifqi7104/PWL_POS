<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'MAK',
                'kategori_nama' => 'Makanan',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'MIM',
                'kategori_nama' => 'Minuman',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'ROK',
                'kategori_nama' => 'Rokok',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'SNCK',
                'kategori_nama' => 'Snack',            
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'OBT',
                'kategori_nama' => 'Obat-Obatan',            
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}

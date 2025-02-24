<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data lama sebelum insert
        DB::table('m_barang')->truncate();

        $data = [
            [
                'barang_id'   => 1,
                'kategori_id' => 1,
                'barang_kode' => 'BR01',
                'barang_nama' => 'Roti Tawar',
                'harga_beli'  => 15000,
                'harga_jual'  => 20000,
            ],
            [
                'barang_id'   => 2,
                'kategori_id' => 1,
                'barang_kode' => 'BR02',
                'barang_nama' => 'Mie Instan',
                'harga_beli'  => 2500,
                'harga_jual'  => 4000,
            ],
            [
                'barang_id'   => 3,
                'kategori_id' => 2,
                'barang_kode' => 'BR03',
                'barang_nama' => 'Susu UHT',
                'harga_beli'  => 10000,
                'harga_jual'  => 13000,
            ],
            [
                'barang_id'   => 4,
                'kategori_id' => 2,
                'barang_kode' => 'BR04',
                'barang_nama' => 'Kopi Instan',
                'harga_beli'  => 5000,
                'harga_jual'  => 8000,
            ],
            [
                'barang_id'   => 5,
                'kategori_id' => 2,
                'barang_kode' => 'BR05',
                'barang_nama' => 'Teh Botol',
                'harga_beli'  => 5000,
                'harga_jual'  => 7000,
            ],
            [
                'barang_id'   => 6,
                'kategori_id' => 5,
                'barang_kode' => 'BR06',
                'barang_nama' => 'Vitamin C',
                'harga_beli'  => 12000,
                'harga_jual'  => 18000,
            ],
            [
                'barang_id'   => 7,
                'kategori_id' => 5,
                'barang_kode' => 'BR07',
                'barang_nama' => 'Obat Flu',
                'harga_beli'  => 10000,
                'harga_jual'  => 15000,
            ],
            [
                'barang_id'   => 8,
                'kategori_id' => 5,
                'barang_kode' => 'BR08',
                'barang_nama' => 'Obat Batuk',
                'harga_beli'  => 11000,
                'harga_jual'  => 16000,
            ],
            [
                'barang_id'   => 9,
                'kategori_id' => 4,
                'barang_kode' => 'BR09',
                'barang_nama' => 'Coklat Batangan',
                'harga_beli'  => 7000,
                'harga_jual'  => 10000,
            ],
            [
                'barang_id'   => 10,
                'kategori_id' => 4,
                'barang_kode' => 'BR10',
                'barang_nama' => 'Keripik Kentang',
                'harga_beli'  => 8000,
                'harga_jual'  => 12000,
            ],
            [
                'barang_id'   => 11,
                'kategori_id' => 4,
                'barang_kode' => 'BR11',
                'barang_nama' => 'Biskuit Coklat',
                'harga_beli'  => 6000,
                'harga_jual'  => 9000,
            ],
            [
                'barang_id'   => 12,
                'kategori_id' => 3,
                'barang_kode' => 'BR12',
                'barang_nama' => 'Rokok Sampoerna',
                'harga_beli'  => 20000,
                'harga_jual'  => 25000,
            ],
            [
                'barang_id'   => 13,
                'kategori_id' => 3,
                'barang_kode' => 'BR13',
                'barang_nama' => 'Rokok Geo Mild',
                'harga_beli'  => 18000,
                'harga_jual'  => 23000,
            ],
            [
                'barang_id'   => 14,
                'kategori_id' => 3,
                'barang_kode' => 'BR14',
                'barang_nama' => 'Rokok Marlboro',
                'harga_beli'  => 4000,
                'harga_jual'  => 7000,
            ],
            [
                'barang_id'   => 15,
                'kategori_id' => 2,
                'barang_kode' => 'BR15',
                'barang_nama' => 'Air Mineral',
                'harga_beli'  => 3000,
                'harga_jual'  => 5000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1,'supplier_kode' => 'SP01', 'supplier_nama' => 'Supplier Pertama', 'supplier_alamat' => 'Jl. Jakarta No. 33'],
            ['supplier_id' => 2,'supplier_kode' => 'SP02', 'supplier_nama' => 'Supplier Kedua', 'supplier_alamat' => 'Jl. Bandung No. 22'],
            ['supplier_id' => 3,'supplier_kode' => 'SP03', 'supplier_nama' => 'Supplier Ketiga', 'supplier_alamat' => 'Jl. Malang No. 55'],
        ];
        DB::table('m_supplier')->insert($data);
    }
}

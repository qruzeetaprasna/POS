<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Supplier 1
            ['barang_id' => 1, 'Katagori_id' => 1, 'barang_kode' => 'BRG01', 'barang_nama' => 'Roti Tawar', 'harga_beli' => 10000, 'harga_jual' => 12000],
            ['barang_id' => 2, 'Katagori_id' => 1, 'barang_kode' => 'BRG02', 'barang_nama' => 'Susu Kaleng', 'harga_beli' => 8000, 'harga_jual' => 9500],
            ['barang_id' => 3, 'Katagori_id' => 2, 'barang_kode' => 'BRG03', 'barang_nama' => 'Kopi Sachet', 'harga_beli' => 1500, 'harga_jual' => 2000],
            ['barang_id' => 4, 'Katagori_id' => 2, 'barang_kode' => 'BRG04', 'barang_nama' => 'Teh Kotak', 'harga_beli' => 3000, 'harga_jual' => 4000],
            ['barang_id' => 5, 'Katagori_id' => 3, 'barang_kode' => 'BRG05', 'barang_nama' => 'Sabun Mandi', 'harga_beli' => 3500, 'harga_jual' => 4500],
            
            // Supplier 2
            ['barang_id' => 6, 'Katagori_id' => 3, 'barang_kode' => 'BRG06', 'barang_nama' => 'Shampoo', 'harga_beli' => 15000, 'harga_jual' => 17500],
            ['barang_id' => 7, 'Katagori_id' => 4, 'barang_kode' => 'BRG07', 'barang_nama' => 'Sapu Ijuk', 'harga_beli' => 12000, 'harga_jual' => 15000],
            ['barang_id' => 8, 'Katagori_id' => 4, 'barang_kode' => 'BRG08', 'barang_nama' => 'Panci Kecil', 'harga_beli' => 45000, 'harga_jual' => 55000],
            ['barang_id' => 9, 'Katagori_id' => 5, 'barang_kode' => 'BRG09', 'barang_nama' => 'Kaos Polos', 'harga_beli' => 30000, 'harga_jual' => 40000],
            ['barang_id' => 10, 'Katagori_id' => 5, 'barang_kode' => 'BRG10', 'barang_nama' => 'Celana Jeans', 'harga_beli' => 100000, 'harga_jual' => 125000],
            
            // Supplier 3
            ['barang_id' => 11, 'Katagori_id' => 1, 'barang_kode' => 'BRG11', 'barang_nama' => 'Biskuit', 'harga_beli' => 5000, 'harga_jual' => 6500],
            ['barang_id' => 12, 'Katagori_id' => 2, 'barang_kode' => 'BRG12', 'barang_nama' => 'Jus Jeruk', 'harga_beli' => 7000, 'harga_jual' => 8500],
            ['barang_id' => 13, 'Katagori_id' => 3, 'barang_kode' => 'BRG13', 'barang_nama' => 'Pasta Gigi', 'harga_beli' => 8000, 'harga_jual' => 10000],
            ['barang_id' => 14, 'Katagori_id' => 4, 'barang_kode' => 'BRG14', 'barang_nama' => 'Sikat Lantai', 'harga_beli' => 9000, 'harga_jual' => 11500],
            ['barang_id' => 15, 'Katagori_id' => 5, 'barang_kode' => 'BRG15', 'barang_nama' => 'Jaket Hoodie', 'harga_beli' => 150000, 'harga_jual' => 180000],
        ];
        DB::table('m_barang')->insert($data);
    }
}

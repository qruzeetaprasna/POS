<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;


class KatagoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['katagori_id' => 1, 'katagori_kode' => 'MKN', 'katagori_nama' => 'Makanan'],
            ['katagori_id' => 2, 'katagori_kode' => 'MNM', 'katagori_nama' => 'Minuman'],
            ['katagori_id' => 3, 'katagori_kode' => 'KSM', 'katagori_nama' => 'Kosmetik'],
            ['katagori_id' => 4, 'katagori_kode' => 'PRT', 'katagori_nama' => 'Peralatan Rumah'],
            ['katagori_id' => 5, 'katagori_kode' => 'PCK', 'katagori_nama' => 'Pakaian'],
        ];
        DB::table('m_katagori')->insert($data);
    }
}

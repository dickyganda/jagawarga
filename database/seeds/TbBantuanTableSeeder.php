<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TbBantuanTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('tb_bantuan')->delete();

        DB::table('tb_bantuan')->insert(array (
            0 =>
            array (
                'id_bantuan' => 1,
                'jenis_bantuan' => 'MAKANAN',
                'satuan' => 'pcs',
                'stok' => 10,
            ),
            1 =>
            array (
                'id_bantuan' => 2,
                'jenis_bantuan' => 'BERAS',
                'satuan' => 'pcs',
                'stok' => 10,
            ),
            2 =>
            array (
                'id_bantuan' => 3,
                'jenis_bantuan' => 'MINYAK',
                'satuan' => 'pcs',
                'stok' => 10,
            ),
            3 =>
            array (
                'id_bantuan' => 4,
                'jenis_bantuan' => 'PAKAIAN',
                'satuan' => 'pcs',
                'stok' => 10,
            ),
        ));


    }
}

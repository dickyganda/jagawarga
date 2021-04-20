<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TbPenyaluranBantuanTableSeeder extends Seeder
{

    public function run()
    {


        DB::table('tb_penyaluran_bantuan')->delete();

        DB::table('tb_penyaluran_bantuan')->insert(array (
            0 =>
            array (
                'id_bantuan' => '1',
                'id_penyaluran_bantuan' => 1,
                'jumlah' => '2',
                'nik' => 1402010607088479,
                'status' => 'sudah',
                'tgl_penyaluran_bantuan' => '2021-01-02',
            ),
        ));


    }
}

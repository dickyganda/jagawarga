<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TbKarantinaTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('tb_karantina')->delete();

        DB::table('tb_karantina')->insert(array (
            0 =>
            array (
                'id_karantina' => 5,
                'id_lokasi' => 3,
                'id_penyakit' => 2,
                'nik' => 3321110902070002,
                'tgl_input' => '2020-12-12',
            ),
            1 =>
            array (
                'id_karantina' => 6,
                'id_lokasi' => 3,
                'id_penyakit' => 3,
                'nik' => 3321060902150009,
                'tgl_input' => '2020-12-01',
            ),
            2 =>
            array (
                'id_karantina' => 8,
                'id_lokasi' => 10,
                'id_penyakit' => 7,
                'nik' => 1402022211100002,
                'tgl_input' => '2021-01-02',
            ),
        ));


    }
}

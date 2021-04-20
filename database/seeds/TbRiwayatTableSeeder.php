<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TbRiwayatTableSeeder extends Seeder
{

    public function run()
    {


        DB::table('tb_riwayat')->delete();

        DB::table('tb_riwayat')->insert(array (
            0 =>
            array (
                'id_lokasi' => 1,
                'id_penyakit' => 1,
                'id_riwayat' => 1,
                'nik' => 12345,
            ),
            1 =>
            array (
                'id_lokasi' => 2,
                'id_penyakit' => 4,
                'id_riwayat' => 2,
                'nik' => 3305041812130006,
            ),
            2 =>
            array (
                'id_lokasi' => 2,
                'id_penyakit' => 4,
                'id_riwayat' => 3,
                'nik' => 1402022007100003,
            ),
            3 =>
            array (
                'id_lokasi' => 2,
                'id_penyakit' => 7,
                'id_riwayat' => 4,
                'nik' => 3305041812130006,
            ),
            4 =>
            array (
                'id_lokasi' => 4,
                'id_penyakit' => 4,
                'id_riwayat' => 5,
                'nik' => 3305040901072053,
            ),
        ));


    }
}

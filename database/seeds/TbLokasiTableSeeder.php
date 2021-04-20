<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TbLokasiTableSeeder extends Seeder
{

    public function run()
    {


        DB::table('tb_lokasi')->delete();

        DB::table('tb_lokasi')->insert(array (
            0 =>
            array (
                'id_lokasi' => 2,
                'latitude' => '-7.098982',
                'longitude' => '112.283653',
                'no_kk' => 1402025108850002,
            ),
            1 =>
            array (
                'id_lokasi' => 3,
                'latitude' => '-7.098139',
                'longitude' => '112.283865',
                'no_kk' => 3321116502910000,
            ),
            2 =>
            array (
                'id_lokasi' => 4,
                'latitude' => '-7.098036',
                'longitude' => '112.283845',
                'no_kk' => 3203070504890020,
            ),
            3 =>
            array (
                'id_lokasi' => 5,
                'latitude' => '-7.098351',
                'longitude' => '112.283437',
                'no_kk' => 3305042302490002,
            ),
            4 =>
            array (
                'id_lokasi' => 6,
                'latitude' => '-7.098470',
                'longitude' => '112.283585',
                'no_kk' => 3321050312850000,
            ),
            5 =>
            array (
                'id_lokasi' => 7,
                'latitude' => '-7.098023',
                'longitude' => '112.283764',
                'no_kk' => 3321112107550000,
            ),
            6 =>
            array (
                'id_lokasi' => 8,
                'latitude' => '-7.097940',
                'longitude' => '112.283784',
                'no_kk' => 3321112302640000,
            ),
            7 =>
            array (
                'id_lokasi' => 9,
                'latitude' => '-7.098236',
                'longitude' => '112.283824',
                'no_kk' => 1402024104450001,
            ),
            8 =>
            array (
                'id_lokasi' => 10,
                'latitude' => '-7.098445',
                'longitude' => '112.284185',
                'no_kk' => 1402022702930001,
            ),
            9 =>
            array (
                'id_lokasi' => 11,
                'latitude' => '-7.098476',
                'longitude' => '112.283422',
                'no_kk' => 3321116107480000,
            ),
            10 =>
            array (
                'id_lokasi' => 12,
                'latitude' => '-7.099095',
                'longitude' => '112.284039',
                'no_kk' => 3305040204930002,
            ),
            11 =>
            array (
                'id_lokasi' => 13,
                'latitude' => '-7.098336',
                'longitude' => '112.283656',
                'no_kk' => 3321110306550000,
            ),
            12 =>
            array (
                'id_lokasi' => 15,
                'latitude' => '-7.097996',
                'longitude' => '112.283467',
                'no_kk' => 3321117004060000,
            ),
            13 =>
            array (
                'id_lokasi' => 17,
                'latitude' => '-7.098817',
                'longitude' => '112.284098',
                'no_kk' => 3321093009140000,
            ),
            14 =>
            array (
                'id_lokasi' => 18,
                'latitude' => '-7.098502',
                'longitude' => '112.284173',
                'no_kk' => 1402024701820016,
            ),
            15 =>
            array (
                'id_lokasi' => 19,
                'latitude' => '-7.098442',
                'longitude' => '112.283214',
                'no_kk' => 1402023007940002,
            ),
            16 =>
            array (
                'id_lokasi' => 20,
                'latitude' => '-7.098432',
                'longitude' => '112.283830',
                'no_kk' => 3321114107480030,
            ),
            17 =>
            array (
                'id_lokasi' => 22,
                'latitude' => '-7.098526',
                'longitude' => '112.283821',
                'no_kk' => 3321110505160010,
            ),
            18 =>
            array (
                'id_lokasi' => 23,
                'latitude' => '-7.098472',
                'longitude' => '112.283332',
                'no_kk' => 1402027112590008,
            ),
        ));


    }
}

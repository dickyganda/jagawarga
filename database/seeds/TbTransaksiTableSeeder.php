<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TbTransaksiTableSeeder extends Seeder
{

    public function run()
    {


        DB::table('tb_transaksi')->delete();



    }
}

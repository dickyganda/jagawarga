<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(TbBantuanTableSeeder::class);
        $this->call(TbKarantinaTableSeeder::class);
        $this->call(TbLokasiTableSeeder::class);
        $this->call(TbPenyakitTableSeeder::class);
        $this->call(TbPenyaluranBantuanTableSeeder::class);
        $this->call(TbRiwayatTableSeeder::class);
        $this->call(TbTransaksiTableSeeder::class);
        $this->call(TbWargaTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

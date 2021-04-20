

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbpenyakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_penyakit', function (Blueprint $table) {
            $table->integer('id_penyakit');
            $table->string('nama_penyakit', 255);
            $table->string('gejala', 255);
            $table->integer('waktu_karantina');
            $table->string('penanganan_pertama', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_penyakit');
    }
}


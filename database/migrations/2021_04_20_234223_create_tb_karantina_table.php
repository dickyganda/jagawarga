

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbkarantinaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_karantina', function (Blueprint $table) {
            $table->integer('id_karantina');
            $table->bigInteger('nik');
            $table->integer('id_lokasi');
            $table->integer('id_penyakit');
            $table->date('tgl_input');
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
        Schema::dropIfExists('tb_karantina');
    }
}


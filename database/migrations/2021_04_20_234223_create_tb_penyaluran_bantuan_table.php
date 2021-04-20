

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbpenyaluranbantuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_penyaluran_bantuan', function (Blueprint $table) {
            $table->integer('id_penyaluran_bantuan');
            $table->bigInteger('nik');
            $table->string('id_bantuan', 255);
            $table->string('jumlah', 11);
            $table->string('status', 255)->default('belum');
            $table->date('tgl_penyaluran_bantuan');
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
        Schema::dropIfExists('tb_penyaluran_bantuan');
    }
}


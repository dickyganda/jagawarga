

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbwargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_warga', function (Blueprint $table) {
            $table->bigInteger('nik');
            $table->bigInteger('no_kk');
            $table->string('nama', 255);
            $table->string('jk', 255);
            $table->date('ttl');
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
        Schema::dropIfExists('tb_warga');
    }
}


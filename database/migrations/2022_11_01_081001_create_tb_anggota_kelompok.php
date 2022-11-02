<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_anggota_kelompok', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_mahasiswa')->unsigned();
            $table->foreignId('id_kelompok')->unsigned();
            $table->foreign('id_kelompok')->references('id')->on('tb_kelompok');
            $table->foreign('id_mahasiswa')->references('id')->on('tb_mahasiswas');
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
        Schema::dropIfExists('tb_anggota_kelompok');
    }
};

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
        Schema::create('tb_kelompok', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_ketua')->unsigned();
            $table->foreignId('id_kelas')->unsigned();
            $table->foreignId('id_prodi')->unsigned();
            $table->foreign('id_kelas')->references('id')->on('tb_kelas');
            $table->foreign('id_prodi')->references('id')->on('tb_prodis');
            $table->foreign('id_ketua')->references('id')->on('tb_mahasiswas');
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
        Schema::dropIfExists('tb_kelompok');
    }
};

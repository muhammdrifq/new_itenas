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
        Schema::create('tb_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->unsigned();
            $table->foreignId('id_prodi')->unsigned();
            $table->foreignId('id_semester')->unsigned();
            $table->string('nim')->unique();
            $table->string('profile_pict')->nullable();
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_prodi')->references('id')->on('tb_prodis');
            $table->foreign('id_semester')->references('id')->on('tb_semesters');
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
        Schema::dropIfExists('tb_mahasiswas');
    }
};

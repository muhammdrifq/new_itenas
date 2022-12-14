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
        Schema::create('tb_koordinators', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->unsigned();
            $table->foreignId('id_prodi')->unsigned()->nullable();
            $table->string('nomorinduk')->unique()->nullable();
            $table->string('no_telepon')->nullable();
            $table->string('profile_pict')->nullable();
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('tb_koordinators');
    }
};

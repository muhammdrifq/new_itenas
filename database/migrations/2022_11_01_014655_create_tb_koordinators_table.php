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
            $table->string('nomorinduk');
            $table->string('no_telepon');
            $table->string('profile_pict')->nullable();
            $table->foreignId('id_prodi')->unsigned();
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

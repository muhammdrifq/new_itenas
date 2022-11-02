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
        Schema::create('tb_posting', function (Blueprint $table) {
            $table->id();
            $table->boolean('tampil')->default(1);
            $table->string('judul')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('bmc')->nullable();
            $table->string('pdf')->nullable();
            $table->string('poster')->nullable();
            $table->string('ppt')->nullable();
            $table->string('word')->nullable();
            $table->foreignId('id_kelompok')->unsigned();
            $table->foreign('id_kelompok')->references('id')->on('tb_kelompok');
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
        Schema::dropIfExists('tb_posting');
    }
};

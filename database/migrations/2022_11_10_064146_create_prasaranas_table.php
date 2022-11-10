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
        Schema::create('prasaranas', function (Blueprint $table) {
            $table->id();
            $table->integer('npsnSekolah');
            $table->string('semester')->nullable();
            $table->integer('kelas')->nullable();
            $table->integer('perpustakaan')->nullable();
            $table->integer('laboratorium')->nullable();
            $table->integer('praktik')->nullable();
            $table->integer('pimpinan')->nullable();
            $table->integer('guru')->nullable();
            $table->integer('ibadah')->nullable();
            $table->integer('uks')->nullable();
            $table->integer('toilet')->nullable();
            $table->integer('gudang')->nullable();
            $table->integer('sirkulasi')->nullable();
            $table->integer('tempatBermain')->nullable();
            $table->integer('tu')->nullable();
            $table->integer('konseling')->nullable();
            $table->integer('osis')->nullable();
            $table->integer('bangunan')->nullable();
            $table->timestamps();

            $table->foreign('npsnSekolah')->references('npsn')->on('sekolahs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prasaranas');
    }
};

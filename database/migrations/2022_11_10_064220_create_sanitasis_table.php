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
        Schema::create('sanitasis', function (Blueprint $table) {
            $table->id();
            $table->integer('npsnSekolah');
            $table->integer('semester')->nullable();
            $table->string('sumberAir')->nullable();
            $table->string('sumberAirMinum')->nullable();
            $table->string('airBersih')->nullable();
            $table->string('jambanDifable')->nullable();
            $table->string('tipeJamban')->nullable();
            $table->string('jmlHariCuciTangan')->nullable();
            $table->integer('jmlTempatCuciTangan')->nullable();
            $table->integer('jmlTempatCuciTanganRusak')->nullable();
            $table->string('airMengalirTempatCuciTangan')->nullable();
            $table->string('saluranLimbaJamban')->nullable();
            $table->string('mengurasSeptik')->nullable();
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
        Schema::dropIfExists('sanitasis');
    }
};

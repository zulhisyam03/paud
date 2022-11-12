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
        Schema::create('data_pelengkaps', function (Blueprint $table) {
            $table->id();
            $table->integer('npsnSekolah');
            $table->string('kkd')->nullable();
            $table->string('namaBank')->nullable();
            $table->string('cabangBank')->nullable();
            $table->integer('noRek')->nullable();
            $table->string('nama')->nullable();
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
        Schema::dropIfExists('data_pelengkaps');
    }
};

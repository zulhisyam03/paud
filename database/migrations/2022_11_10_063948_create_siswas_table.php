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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->integer('npsnSekolah');
            $table->string('idSiswa')->nullable();
            $table->string('namaSiswa')->nullable();
            $table->string('jk')->nullable();
            $table->string('tempaLahir')->nullable();
            $table->date('tglLahir')->nullable();
            $table->text('alamat')->nullable();
            $table->string('agama')->nullable();
            $table->string('waliSiswa')->nullable();
            $table->string('hpWali')->nullable();
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
        Schema::dropIfExists('siswas');
    }
};

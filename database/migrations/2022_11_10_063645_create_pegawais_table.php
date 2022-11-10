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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->integer('npsnSekolah');
            $table->string('idPegawai')->nullable();
            $table->string('namaPegawai')->nullable();
            $table->string('tempatLahir')->nullable();
            $table->date('tglLahir')->nullable();
            $table->string('noHp')->nullable();
            $table->string('jk')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('status')->nullable();
            $table->string('golongan')->nullable();            
            $table->string('pT')->nullable();
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
        Schema::dropIfExists('pegawais');
    }
};

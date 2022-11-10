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
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->id();
            $table->integer('npsn')->unique();
            $table->string('namaSekolah')->unique();         
            $table->string('status')->nullable();
            $table->string('bentukPendidikan')->nullable();
            $table->string('statusKepemilikan')->nullable();
            $table->string('skPendirian')->nullable();
            $table->date('tglSkPendirian')->nullable();
            $table->string('skIzinOperasional')->nullable();
            $table->date('tglSkOperasional')->nullable();
            $table->timestamps();

            $table->foreign('namaSekolah')->references('name')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sekolahs');
    }
};

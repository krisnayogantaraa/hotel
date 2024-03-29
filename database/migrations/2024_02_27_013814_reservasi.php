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
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id('id_reservasi');
            $table->integer('id_akun');
            $table->datetime('tanggal_pesan');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
            $table->datetime('tanggal_checkin');
            $table->datetime('tanggal_checkout');
            $table->integer('no_kamar');
            $table->rememberToken();
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
        Schema::dropIfExists('reservasi');
    }
};

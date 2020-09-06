<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->bigIncrements('id_pasien');
            $table->string('no_rawat', 150);
            $table->string('nama_pasien', 100);
            $table->string('umur', 50);
            $table->string('jk', 15);
            $table->string('poli', 50); //poliklinik tujuan
            $table->string('nama_pj', 100);
            $table->string('alamat_pj', 200);
            $table->string('no_telp_pj', 15);
            $table->string('dokter_pj', 100);
            $table->string('jenis_bayar', 50); //1. Bpjs 2. Bayar Sendiri
            $table->string('cara_masuk', 50); //1. RawatJalan -> dikasiobat->tagihan->pulang 2. Rawat inap menginap->memilih kamar kosong
            $table->string('id_kamar')->nullable();
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
        Schema::dropIfExists('pasiens');
    }
}

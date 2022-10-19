<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTransaksiDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_transaksi_detail', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksi_detail');
            $table->string('id_transaksi');
            $table->string('id_barang');
            $table->string('transaksi_jenis');
            $table->string('transaksi_harga');
            $table->string('transaksi_jumlah');
            $table->string('transaksi_detail_status');
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
        Schema::dropIfExists('tbl_transaksi_detail');
    }
}

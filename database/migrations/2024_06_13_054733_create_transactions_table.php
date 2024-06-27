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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('no_resi');
            $table->foreignId('user_id');
            $table->foreignId('product_id');
            $table->string('harga');
            $table->string('jumlah');
            $table->string('charge');
            $table->string('total_harga');
            $table->string('bayar');
            $table->string('sisa_bayar');
            $table->string('tanggal_transaksi');
            $table->string('tanggal_selesai');
            $table->string('bukti_bayar');
            $table->string('status_produksi');
            $table->string('status_transaksi');
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
        Schema::dropIfExists('transactions');
    }
};

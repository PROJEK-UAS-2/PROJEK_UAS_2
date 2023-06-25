<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Pembelian', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penumpang');
            $table->string('domisili');
            $table->date('tanggal_pembelian');
            $table->date('tanggal_keberangkatan');
            $table->string('domisili_tujuan');
            $table->integer('paket_bis_id')->references('id')->on('Paketbis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Pembelian');
    }
};

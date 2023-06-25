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
        Schema::create('Supir', function (Blueprint $table) {
            $table->id();
            $table->string('nama_supir');
            $table->string('kode_supir');
            $table->string('kontak_1');
            $table->string('kontak_2');
            $table->integer('bis_id')->references('id')->on('Bis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Supir');
    }
};

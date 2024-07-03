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
        Schema::create('jatah_cuti', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->integer('jumlah');
            $table->unsignedBigInteger('nip');
            $table->foreign('nip')->references('id')->on('pegawai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jatah_cuti');
    }
};

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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nip', length:20);
            $table->char('gender', length:1);
            $table->string('tmp_lahir', length:45);
            $table->date('tgl_lahir');
            $table->string('telpon', length:20);
            $table->string('alamat', length:100);
            $table->unsignedBigInteger('divisi_id');
            $table->foreign('divisi_id')->references('id')->on('divisi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        Schema::dropIfExists('pegawai');
    }
};

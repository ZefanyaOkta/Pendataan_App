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
        Schema::create('identitas_penghuni', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pendataan_rumah_id');
            $table->string('nama');
            $table->string('nik');
            $table->string('jenis_kelamin');
            $table->string('ttl');
            $table->string('pekerjaan');
            $table->timestamps();
            
            $table->foreign('pendataan_rumah_id')->references('id')->on('pendataan_rumah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identitas_penghuni');
    }
};

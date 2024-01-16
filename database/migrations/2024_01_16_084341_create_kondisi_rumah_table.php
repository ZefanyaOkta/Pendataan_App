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
        Schema::create('kondisi_rumah', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pendataan_rumah_id');
            $table->string('fondasi');
            $table->string('atap');
            $table->string('lantai');
            $table->string('dinding');
            $table->string('jendela');
            $table->string('ventilasi');
            $table->string('plafon');
            $table->timestamps();

            $table->foreign('pendataan_rumah_id')->references('id')->on('pendataan_rumah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kondisi_rumah');
    }
};

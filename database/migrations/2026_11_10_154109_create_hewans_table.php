<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hewans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_hewan');
            $table->string('jenis');
            $table->string('ras')->nullable();
            $table->integer('umur')->nullable();
            $table->string('nama_pemilik');
            $table->string('no_hp');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hewans');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penitipans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hewan_id')->constrained('hewans')->onDelete('cascade');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
            $table->integer('biaya')->default(0);
            $table->string('status')->default('dititipkan');
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penitipans');
    }
};
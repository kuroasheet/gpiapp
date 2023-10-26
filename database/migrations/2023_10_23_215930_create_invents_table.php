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
        Schema::create('invents', function (Blueprint $table) {
            $table->id();
            $table->string('namabarang');
            $table->string('volume');
            $table->integer('tahun');
            $table->string('sumber');
            $table->string('nilai');
            $table->enum('kondisi' ,['Sangat Bagus','Bagus','Kurang Bagus','Sedang dlm Perbaikan','Rusak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invents');
    }
};

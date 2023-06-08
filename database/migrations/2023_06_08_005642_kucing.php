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
        Schema::create('kucings', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50);
            $table->string('warna',10);
            $table->string('ras', 20);
            $table->boolean('gender');
            $table->integer('berat_badan');
            $table->integer('tinggi_badan')->nullable();
            $table->text('kesehatan')->nullable();
            $table->text('sikap')->nullable();
            $table->binary('foto')->nullable();
            $table->binary('video')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kucings');
    }
};

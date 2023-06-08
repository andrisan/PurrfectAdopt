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
        Schema::create('kucing', function (Blueprint $table) {
            $table->integer('id_kucing')->primary();
            $table->string('nama', 10);
            $table->string('warna', 15);
            $table->string('ras', 15);
            $table->boolean('gender');
            $table->integer('berat_badan');
            $table->binary('video')->nullable();
            $table->binary('foto')->nullable();
            $table->integer('tinggi_badan')->nullable();
            $table->text('kesehatan');
            $table->text('sikap');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

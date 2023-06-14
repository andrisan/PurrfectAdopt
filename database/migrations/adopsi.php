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
        Schema::create('Adopsi', function (Blueprint $table) {
            $table->id();
            $table->integer('JUMLAH');
            $table->string('TEMPAT');
            $table->boolean('STATUS_PEMBAYARAN')->nullable();
            $table->string('METODE')->nullable();
            $table->text('LOKASI_PU')->nullable();
            $table->timestamp('TGL_ADOPSI');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Adopsi');
    }
};

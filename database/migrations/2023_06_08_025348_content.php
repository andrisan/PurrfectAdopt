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
        Schema::create('contens', function (Blueprint $table) {
            $table->id();
            $table->string('judul',50);
            $table->string('nama', 50);
            $table->text('isi');
            $table->binary('galery');
            $table->timestamps();
        });
        /**
        * Diatas merupakan kode penambahan migrasi tabel konten
        */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contens');
    }
};
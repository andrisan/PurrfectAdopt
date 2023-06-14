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
<<<<<<<< HEAD:database/migrations/2023_06_08_070757_create_contentt.php
        Schema::create('contentts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
========
        Schema::create('Adopsi', function (Blueprint $table) {
            $table->id();
            $table->integer('JUMLAH');
            $table->string('TEMPAT');
            $table->boolean('STATUS_PEMBAYARAN')->nullable();
            $table->string('METODE')->nullable();
            $table->text('LOKASI_PU')->nullable();
            $table->timestamp('TGL_ADOPSI');

>>>>>>>> 2cb281bd9a10a34533660c152f8c4a12ad13950e:database/migrations/adopsi.php
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:database/migrations/2023_06_08_070757_create_contentt.php
        Schema::dropIfExists('contentts');
========
        Schema::dropIfExists('Adopsi');
>>>>>>>> 2cb281bd9a10a34533660c152f8c4a12ad13950e:database/migrations/adopsi.php
    }
};

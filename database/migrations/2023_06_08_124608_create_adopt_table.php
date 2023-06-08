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
        Schema::create('adopt', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_adopsi');
            $table->integer('jumlah');
            $table->text('tempat');
            $table->boolean('status_pembayaran');
            $table->string('metode',20);
            $table->text('lokasi_pu');
            
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adopt');
    }
};

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
        Schema::create('soal', function (Blueprint $table) {
            $table->id('id_soal');
            $table->foreignId('akun_id_akun')->constrained('user_adopt');
            $table->foreignId('id_user')->constrained('user_adopt');
            $table->id('id_soal');
            $table->text('soal');
            $table->text('jawaban');
        });

        Schema::create('admin_soal_pk', function (Blueprint $table) {
            $table->foreignId('admin_id_admin')->constrained('admin');
            $table->foreignId('soal_id_soal')->constrained('soal');
        });

        Schema::create('jawaban', function (Blueprint $table) {
            $table->id(id_jawaban);
            $table->foreignId('id_user')->constrained('user_adopt');
            $table->foreignId('akun_id_akun')->constrained('user_adopt');
            $table->text('jawaban');
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soal');
    }
};

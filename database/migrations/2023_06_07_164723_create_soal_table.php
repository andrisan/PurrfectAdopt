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
            $table->id();
            $table->foreignId('akun_id_akun')->constrained('users');
            $table->foreignId('id_user')->constrained('users');
            $table->text('soal');
            $table->text('jawaban');
        });

        Schema::create('admin_soal_pk', function (Blueprint $table) {
            $table->foreignId('admin_id_admin')->constrained('users');
            $table->foreignId('soal_id_soal')->constrained('soal');
        });

        Schema::create('jawaban', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('akun_id_akun')->constrained('users');
            $table->text('jawaban');
        });
        
        Schema::create('check_jawaban', function (Blueprint $table) {
                $table->id();
                $table->boolean('status_jawaban');
        });

        Schema::create('jawaban_check_pk', function (Blueprint $table) {
                 $table->foreignId('users_id_user')->constrained('jawaban');
                 $table->foreignId('id_jawaban')->constrained('jawaban');
                 $table->foreignId('id_check')->constrained('check_jawaban');
        });
        
        Schema::create('soal_jawaban_pk', function (Blueprint $table) {
            $table->foreignId('id_soal')->constrained('soal');
            $table->foreignId('id_jawaban')->constrained('jawaban');
            $table->foreignId('user_adopt_id_user')->constrained('jawaban');
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

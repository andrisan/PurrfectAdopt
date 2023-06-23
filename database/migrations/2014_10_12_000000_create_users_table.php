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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['admin', 'user'])->default('user');
            $table->boolean('gender')->nullable();
            $table->string('profesi', 50)->nullable();
            $table->text('alamat')->nullable();
            $table->smallInteger('usia')->nullable();
            $table->text('ekonomi')->nullable();
            $table->text('crime_hist')->nullable();
            $table->integer('kontak')->nullable();
            $table->boolean('status')->default(0);
            $table->binary('fotoProfil')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

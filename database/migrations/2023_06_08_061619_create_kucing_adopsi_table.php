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
        Schema::create('kucing_adopsi', function (Blueprint $table) {
            $table->id();
            $table->foreign('kucing_id_kucing')->constrained('kucing_adopsi')->primary();
            $table->foreign('kucing_id_kucing')->primary();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kucing_adopsi');
    }
};

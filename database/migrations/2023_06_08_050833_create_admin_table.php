<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmin1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ADMIN1', function (Blueprint $table) {
            $table->integer('ID_ADMIN')->primary();
            $table->integer('ID_AKUN');
            $table->boolean('AKTIF');
            $table->foreign('ID_AKUN')->references('ID_AKUN')->on('AKUN');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ADMIN1');
    }
}
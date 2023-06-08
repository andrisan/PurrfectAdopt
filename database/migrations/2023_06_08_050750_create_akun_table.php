<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AKUN', function (Blueprint $table) {
            $table->integer('ID_AKUN')->primary();
            $table->string('NAMA', 100);
            $table->string('USERNAME', 50)->unique();
            $table->string('EMAIL', 100);
            $table->string('PASSWORD_AKUN', 50);
            $table->string('ROLES', 50);
            $table->binary('FOTO')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema:dropIfExists('AKUN');
}
}
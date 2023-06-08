<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAdoptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('USER_ADOPT', function (Blueprint $table) {
            $table->integer('ID_USER')->primary();
            $table->integer('ID_AKUN');
            $table->boolean('GENDER');
            $table->string('PROFESI', 50);
            $table->text('Alamat');
            $table->smallInteger('Usia');
            $table->text('KOND_PSIKOLOGI');
            $table->text('EKONOMI');
            $table->text('CRIME_HIST');
            $table->integer('KONTAK');
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
        Schema::dropIfExists('USER_ADOPT');
    }
}

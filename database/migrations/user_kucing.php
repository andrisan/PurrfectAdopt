<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up():void{
        Schema::create('user_kucing', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_kucing');
            $table->boolean('is_adopted')->default(0);
            $table->timestamps();
        });
    }
    public function down():void{
        Schema::dropIfExists('user_kucing');
    }
};
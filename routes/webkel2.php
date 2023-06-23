<?php

use App\Http\Controllers\CatController;

Route::middleware(['auth'])->group(function(){
    Route::get('/adopted', [CatController::class, 'index'])->name('profile');
  });
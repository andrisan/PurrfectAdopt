<?php
use App\Http\Controllers\BioController;
use App\Http\Controllers\DiskusiController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\E_ProfileController;
use App\Http\Controllers\Setting2Controller;
use App\Http\Controllers\Admin\artikelAdminController;

// FITUR TAMBAHAN BIO
Route::get('bio/{id}', [BioController::class, 'show'])->name('bio.show');

Route::get('balasDiskusi', function() {
  return view('/profile/balasDiskusi');
})->name('balasDiskusi');

Route::resource('diskusi', DiskusiController::class);
Route::get('/balasDiskusi/{id}', [DiskusiController::class, 'show'])->name('balasDiskusi');

Route::resource('faq', FaqController::class);

Route::get('/setting1/edit/{id}', [E_ProfileController::class, 'edit'])->name('setting1.edit');
Route::put('/setting1/update/{id}', [E_ProfileController::class, 'update'])->name('setting1.update');

Route::get('/setting2/edit/{id}', [Setting2Controller::class, 'edit'])->name('setting2.edit');
Route::put('/setting2/update/{id}', [Setting2Controller::class, 'update'])->name('setting2.update');

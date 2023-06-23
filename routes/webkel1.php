<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function(){
    Route::get('/profile/mypet', function () {
      return view('profile/mypet');
    })->name('mypet');
});
  
  Route::get('/profile/profile_adopter', [ProfileController::class, 'showProfile1'])->name('profile_adopter');
  
  Route::post('/profile/update-bio', 'ProfileController@updateBio')->name('profile.updateBio');
  
  Route::get('/profile/mypet', [ProfileController::class, 'myPet'])->name('profile.mypet');
  
  Route::get('/profile/profile_adopter', [ProfileController::class, 'showProfile'])->name('profile_adopter');
  Route::get('toggleLove/{id}', [ProfileController::class, 'toggleLove'])->name('toggleLove');
  Route::get('/profile/profile_distributor', [ProfileController::class, 'showProfileDistributor'])->name('profile_distributor');
  
   Route::get('/profile/Upload-Distributor', function () {
      return view('profile/Upload-Distributor');
    })->name('Upload-Distributor');
  
  
  Route::get('profileCat_more/{id}', [ProfileController::class, 'show'])->name('profileCat_more');
  
  Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

// Route update Bio n cp profil pengguna
Route::post('/profile/updateBio', [ProfileController::class, 'updateBio'])->name('profile.update');

Route::post('/kucing', [CatController::class, 'store'])->name('store.cat');
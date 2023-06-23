<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\KucingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BioController;
use App\Http\Controllers\MainDashboardController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DiskusiController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\E_ProfileController;
use App\Http\Controllers\Setting2Controller;
use App\Http\Controllers\Admin\artikelAdminController;
use App\Models\Kucing;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/** START HALAMAN WELCOME, DIMANA USER YANG BELUM MELAKUKAN LOGIN AKAN DIARAHKAN KE HALAMAN INI */
Route::middleware(['guest'])->group(function(){
  Route::get('/', function(){
    return view('welcome');
  })->name('welcome');
});

/** END HALAMAN WELCOME */

Route::middleware(['auth'])->group(function(){
  Route::get('/profile/mypet', function () {
    return view('profile/mypet');
  })->name('mypet');

  Route::get('/profile/profile_adopter', function () {
    return view('profile/profile_adopter');
  })->name('profile_adopter');

  Route::get('/profile/profile_distributor', function () {
    return view('profile/profile_distributor');
  })->name('profile_distributor');

  Route::get('/profile/Upload-Distributor', function () {
    return view('profile/Upload-Distributor');
  })->name('Upload-Distributor');

  Route::get('/profile/profileCat_more', function () {
    return view('profile/profileCat_more');
  })->name('profileCat_more');
});



Route::middleware(['auth'])->group(function(){

  Route::get('bio/{id}', [BioController::class, 'show'])->name('bio.show');
  Route::view('/testi','testi');
  Route::view('/bio','bio');
  Route::view('/balasDiskusi','balasDiskusi');
  Route::view('/diskusi','diskusi');
  Route::view('/setting2','setting2');
  Route::view('/setting1','setting1');
});

/*Route::middleware(['guest'])->group(function(){
//   Route::get('/', [SesiController::class, 'index'])->name('login');
//   Route::post('/', [SesiController::class, 'login']);

  Route::get('/signup', [SignUpController::class, 'showRegistrationForm'])->name('signup');
  Route::post('/signup', [SignUpController::class, 'signup']);
  });
Route::get('/dashboard', function () {
    return view('dashboard');
  })->name('dashborad');
});

/** END HALAMAN WELCOME
  // Route::get('/signup', [SignUpController::class, 'showRegistrationForm'])->name('signup');
  // Route::post('/signup', [SignUpController::class, 'signup']);

Route::get('/dashboard', function () {
    return view('dashboard');
  })->name('dashborad');
});*/


Route::middleware(['auth'])->group(function(){
  Route::get('/adopted', [CatController::class, 'index'])->name('profile');
  Route::get('bio/{id}', [BioController::class, 'show'])->name('bio.show');
  Route::view('/testi','testi');
  Route::view('/bio','bio');
  Route::view('/balasDiskusi','balasDiskusi');
  Route::view('/diskusi','diskusi');
  Route::view('/setting2','setting2');
  Route::view('/setting1','setting1');
  Route::middleware(['guest'])->group(function(){

  });

  
  Route::middleware(['auth'])->group(function(){
    Route::get('/adopted', [CatController::class, 'index'])->name('profile');
  });
});


// Route menampilkan form profil pengguna

require __DIR__.'/auth.php';

require __DIR__.'/auth.php';
require __DIR__.'/webkel5.php';
require __DIR__.'/webkel3.php';
require __DIR__.'/webkel2.php';
require __DIR__.'/webkel1.php';
require __DIR__.'/webkel4.php';


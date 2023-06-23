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

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('password.update');

Route::middleware(['auth'])->group(function(){
  /** SEBELUM MENGAKSES HAL. ADMIN-HOME USER DIPERKENANKAN UNTUK LOGIN DAHULU */
  /** TERDAPAT MIDDLEWARE UNTUK MEMBATASI AGAR HANYA ADMIN SAJA YANG BISA MENGAKSES HALAMAN INI */
  Route::resource('/admin-home', DashboardController::class)->middleware('userAccess:admin');
  route::get('/artikelAdmin',[artikelAdminController::class, 'show'])->middleware('userAccess:admin');
  Route::delete('/artikelAdmin/destroy/{id}', [artikelAdminController::class, 'destroy'])->middleware('userAccess:admin');

  /** SEBELUM MENGAKSES HAL. DASHBOARD USER DIPERKENANKAN UNTUK LOGIN DAHULU */
  Route::get('/dashboard', [MainDashboardController::class, 'index']);

  Route::get('/main', [AuthenticatedSessionController::class, 'main']);
  Route::get('/main/admin', [AuthenticatedSessionController::class, 'admin'])->middleware('userAccess:admin');
  Route::get('/main/user', [AuthenticatedSessionController::class, 'user'])->middleware('userAccess:user');

  /** JIKA INGIN LOGOUT KETIKKAN ENDPOINT DIBAWAH INI PADA URL */
  Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);

});
/** END AUTH: LOGIN, REGISTER, FORGOT-PASSWORD, RESET-PASSWORD */


Route::middleware(['guest'])->group(function(){

});

Route::get('/article', [ContentController::class, 'create'])->name('article');

Route::get('/article/details', function () {
  return view('article/articledetails');
})->name('articledetails');

Route::get('/findyourcat', function () {
  return view('findyourcat');
})->name('findyourcat');

Route::post('/contents', [ContentController::class, 'store'])->name('contents.store');

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

  Route::get('/article', [ContentController::class, 'create'])->name('article');

  Route::get('/article/{id}', [ContentController::class, 'show_details'])->name('articledetails');

  Route::get('/find-your-cat', [CatController::class, 'search'])->name('cat.search');

  Route::post('/contents', [ContentController::class, 'store'])->name('contents.store');

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
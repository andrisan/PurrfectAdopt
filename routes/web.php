<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\KucingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BioController;
use App\Http\Controllers\ContentController;

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

/** START HALAMAN WELCOME, DIMANA USER YANG BELUM MELAKUKAN LOGIN AKAN DIARAHKAN KE HALAMAN INI */
Route::middleware(['guest'])->group(function(){
  Route::get('/', function(){
    return view('welcome');
  })->name('welcome');
});
/** END HALAMAN WELCOME */

/** START AUTH: LOGIN, REGISTER, FORGOT-PASSWORD, RESET-PASSWORD */
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

  /** SEBELUM MENGAKSES HAL. DASHBOARD USER DIPERKENANKAN UNTUK LOGIN DAHULU */
  Route::get('/dashboard', [DashboardController::class, 'create']);
  Route::get('/main', [AuthenticatedSessionController::class, 'main']);
  Route::get('/main/admin', [AuthenticatedSessionController::class, 'admin'])->middleware('userAccess:admin');
  Route::get('/main/user', [AuthenticatedSessionController::class, 'user'])->middleware('userAccess:user');

  /** JIKA INGIN LOGOUT KETIKKAN ENDPOINT DIBAWAH INI PADA URL */
  Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);
});
/** END AUTH: LOGIN, REGISTER, FORGOT-PASSWORD, RESET-PASSWORD */

Route::get('bio/{id}', [BioController::class, 'show'])->name('bio.show');
Route::view('/testi','testi');
Route::view('/bio','bio');
Route::view('/balasDiskusi','balasDiskusi');
Route::view('/diskusi','diskusi');
Route::view('/setting2','setting2');
Route::view('/setting1','setting1');
Route::middleware(['guest'])->group(function(){

  Route::resource('/admin-kucing', KucingController::class);
  Route::get('getadminkucing', [KucingController::class, 'getKucing']);
  Route::get('hapuskucing/{id}', [KucingController::class, 'destroy'] )->name('hapuskucing');

  // Route::resource('/admin-home', DashboardController::class);
  Route::get('gethomekucing', [DashboardController::class, 'getKucing']);
  Route::get('gethomecontent', [DashboardController::class, 'getContent']);
  Route::get('gethomeuser', [DashboardController::class, 'getUser']);

  Route::resource('/admin-user', UserController::class);
  Route::get('getadminuser', [UserController::class, 'getUser']);
  Route::get('hapususer/{id}', [UserController::class, 'destroy'] )->name('hapususer');
  Route::get('/admin-detailuser', [UserController::class, 'getDetail']);

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
});

require __DIR__.'/auth.php';
<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\KucingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BioController;

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


Route::get('/profile/profile_adopter', function () {
  return view('profile/profile_adopter');
})->name('profile_adopter');

  Route::get('/', function(){
    return view('welcome');
  })->name('welcome');

  Route::get('bio/{id}', [BioController::class, 'show'])->name('bio.show');
  Route::view('/testi','testi');
  Route::view('/bio','bio');
  Route::view('/balasDiskusi','balasDiskusi');
  Route::view('/diskusi','diskusi');
  Route::view('/setting2','setting2');
  Route::view('/setting1','setting1');
  Route::middleware(['guest'])->group(function(){
  Route::get('/', [SesiController::class, 'index'])->name('login');
  Route::post('/', [SesiController::class, 'login']);
    
  Route::get('/signup', [SignUpController::class, 'showRegistrationForm'])->name('signup');
  Route::post('/signup', [SignUpController::class, 'signup']);

Route::resource('/admin-kucing', KucingController::class);
Route::get('getadminkucing', [KucingController::class, 'getKucing']);
Route::get('hapuskucing/{id}', [KucingController::class, 'destroy'] )->name('hapuskucing');

Route::resource('/admin-home', DashboardController::class);
Route::get('gethomekucing', [DashboardController::class, 'getKucing']);
Route::get('gethomecontent', [DashboardController::class, 'getContent']);
Route::get('gethomeuser', [DashboardController::class, 'getUser']);

Route::resource('/admin-user', UserController::class);
Route::get('getadminuser', [UserController::class, 'getUser']);
Route::get('hapususer/{id}', [UserController::class, 'destroy'] )->name('hapususer');
Route::get('/admin-detailuser', [UserController::class, 'getDetail']);

Route::get('/dashboard', function () {
    return view('dashboard');
  })->name('dashborad');
});

Route::get('/article', function () {
  return view('article/article');
})->name('article');

Route::get('/article/details', function () {
  return view('article/articledetails');
})->name('articledetails');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('password.update');


Route::get('/home', function(){
  return redirect('/admin');
});

Route::middleware(['auth'])->group(function(){
  Route::get('/main', [AuthenticatedSessionController::class, 'main']);
  Route::get('/main/admin', [AuthenticatedSessionController::class, 'admin'])->middleware('userAccess:admin');
  Route::get('/main/user', [AuthenticatedSessionController::class, 'user'])->middleware('userAccess:user');
  Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);
});

require __DIR__.'/auth.php';

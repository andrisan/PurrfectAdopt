<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\KucingController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['guest'])->group(function(){
  Route::get('/', function(){
    return view('welcome');
  })->name('welcome');


Route::resource('/admin-kucing', KucingController::class);
Route::get('getadminkucing', [KucingController::class, 'getKucing']);
Route::get('hapuskucing/{id}', [KucingController::class, 'destroy'] )->name('hapuskucing');

Route::resource('/admin-home', DashboardController::class);
Route::get('gethomekucing', [DashboardController::class, 'getKucing']);


Route::get('/dashboard', function () {
    return view('dashboard');
  })->name('dashborad');
});

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

Route::get('/cats/adopted', 'CatController@adopted')->name('cats.adopted');

require __DIR__.'/auth.php';

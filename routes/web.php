<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
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
  Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');
  Route::post('/', [AuthenticatedSessionController::class, 'store']);

  Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
  Route::post('/register', [RegisteredUserController::class, 'store']);

  Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
  Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

  Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
  Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('password.update');
});

Route::get('/home', function(){
  return redirect('/admin');
});

Route::middleware(['auth'])->group(function(){
  Route::get('/main', [AuthenticatedSessionController::class, 'main']);
  Route::get('/main/admin', [AuthenticatedSessionController::class, 'admin'])->middleware('userAccess:admin');
  Route::get('/main/user', [AuthenticatedSessionController::class, 'user'])->middleware('userAccess:user');
  Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);
});

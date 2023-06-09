<?php

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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

  Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('password.request');
  Route::post('/forgot-password', [ForgotPasswordController::class, 'forgotPasswordHandler'])->name('password.email');

  Route::get('/reset-password/{token}', [ResetPasswordController::class, 'index'])->name('password.reset');
  Route::post('/reset-password', [ResetPasswordController::class, 'resetPasswordHandler'])->name('password.update');
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

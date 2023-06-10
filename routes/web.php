<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\SesiController;
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
  Route::view('/bio','bio');
  Route::view('/testidistributor','testidistributor');
  Route::middleware(['guest'])->group(function(){
  Route::get('/', [SesiController::class, 'index'])->name('login');
  Route::post('/', [SesiController::class, 'login']);
    
  Route::get('/signup', [SignUpController::class, 'showRegistrationForm'])->name('signup');
  Route::post('/signup', [SignUpController::class, 'signup']);

  Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('password.request');
  Route::post('/forgot-password', [ForgotPasswordController::class, 'forgotPasswordHandler'])->name('password.email');

  Route::get('/reset-password/{token}', [ResetPasswordController::class, 'index'])->name('password.reset');
  Route::post('/reset-password', [ResetPasswordController::class, 'resetPasswordHandler'])->name('password.update');
});

Route::get('/home', function(){
  return redirect('/admin');
});

Route::middleware(['auth'])->group(function(){
  Route::get('/users', [AdminController::class, 'index']);
  Route::get('/users/admin', [AdminController::class, 'admin'])->middleware('userAccess:admin');
  Route::get('/users/user', [AdminController::class, 'user'])->middleware('userAccess:user');
  Route::get('/logout', [SesiController::class, 'logout']);
});

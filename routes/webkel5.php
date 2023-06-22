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
Route::get('/admin-detailuser/{id}', [UserController::class, 'getDetail'])->name('getdetail');
Route::get('/getuserkucing/{id}', [UserController::class, 'getUserKucing'] )->name('getuserkucing');

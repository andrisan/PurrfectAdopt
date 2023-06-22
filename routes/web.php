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
use App\Http\Controllers\ContentController;
use App\Http\Controllers\Admin\artikelAdminController;


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

Route::post('/profile/update-bio', 'ProfileController@updateBio')->name('profile.updateBio');

Route::get('/profile/mypet', [ProfileController::class, 'myPet'])->name('profile.mypet');

Route::get('/profile/profile_adopter', [ProfileController::class, 'showProfile'])->name('profile_adopter');

Route::get('/profile/profile_distributor', [ProfileController::class, 'showProfileDistributor'])->name('profile_distributor');

Route::get('/profile/Upload-Distributor', function () {
  return view('profile/Upload-Distributor');
})->name('Upload-Distributor');

Route::get('profileCat_more/{id}', [ProfileController::class, 'show'])->name('profileCat_more');

/** START HALAMAN WELCOME, DIMANA USER YANG BELUM MELAKUKAN LOGIN AKAN DIARAHKAN KE HALAMAN INI */
Route::middleware(['guest'])->group(function(){
  Route::get('/', function(){
    return view('welcome');
  })->name('welcome');
});


  Route::get('bio/{id}', [BioController::class, 'show'])->name('bio.show');
  Route::view('/testi','testi');
  Route::view('/bio','bio');
  Route::view('/balasDiskusi','balasDiskusi');
  Route::view('/diskusi','diskusi');
  Route::view('/setting2','setting2');
  Route::view('/setting1','setting1');
  Route::middleware(['guest'])->group(function(){
//   Route::get('/', [SesiController::class, 'index'])->name('login');
//   Route::post('/', [SesiController::class, 'login']);

  Route::get('/signup', [SignUpController::class, 'showRegistrationForm'])->name('signup');
  Route::post('/signup', [SignUpController::class, 'signup']);



Route::get('/dashboard', function () {
    return view('dashboard');
  })->name('dashborad');
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
  route::get('/artikelAdmin',[artikelAdminController::class, 'index'])->middleware('userAccess:admin');

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


// Route menampilkan form profil pengguna
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

// Route update Bio n cp profil pengguna
Route::post('/profile/updateBio', [ProfileController::class, 'updateBio'])->name('profile.update');

Route::post('/cats', [CatController::class, 'store'])->name('store.cat');

require __DIR__.'/auth.php';

require __DIR__.'/auth.php';
require __DIR__.'/webkel5.php';


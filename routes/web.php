<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\Admin\ObatController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RuangController;
use App\Http\Controllers\Admin\DokterController;
use App\Http\Controllers\Admin\PasienController;
use App\Http\Controllers\Admin\PegawaiController;
use App\Http\Controllers\Admin\WilayahController;
use App\Http\Controllers\Admin\TindakanController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',  [HomepageController::class, 'index'])->name('home.index');
Route::get('/about',  [HomepageController::class, 'about'])->name('home.about');
Route::get('/kontak',  [HomepageController::class, 'kontak'])->name('home.kontak');
Route::get('/kategori',  [HomepageController::class, 'kategori'])->name('home.kategori');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('pasien', PasienController::class)->middleware('auth');
    Route::resource('dokter', DokterController::class)->middleware('auth');
    Route::resource('pegawai', PegawaiController::class)->middleware('auth');
    Route::resource('wilayah', WilayahController::class)->middleware('auth');
    Route::resource('obat', ObatController::class)->middleware('auth');
    Route::resource('tindakan', TindakanController::class)->middleware('auth');
    Route::resource('user', UserController::class)->middleware('auth');
    Route::resource('ruang', RuangController::class)->middleware('auth');
    Route::get('transactions/{id}/set-status', 'App\Http\Controllers\Admin\TransactionController@setStatus')
        ->name('transactions.status');
    Route::resource('transactions', TransactionController::class)->middleware('auth');
});

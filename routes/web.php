<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

// Mahasiswa routes
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/laporan_grade', [MahasiswaController::class, 'laporanGrade'])->name('mahasiswa.laporan_grade');
Route::get('/mahasiswa/chart', [MahasiswaController::class, 'chart'])->name('mahasiswa.chart');

Route::get('/mahasiswa/laporan_grade', 'App\Http\Controllers\MahasiswaController@laporanGrade')->name('mahasiswa.laporan_grade');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

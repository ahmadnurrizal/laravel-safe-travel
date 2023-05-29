<?php

use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('beranda', [PageController::class, 'beranda'])->name('beranda');
Route::get('info-negara', [PageController::class, 'infoNegara'])->name('info-negara');
Route::get('inggirs-raya/informasi-umum', [PageController::class, 'informasiUmum'])->name('informasi-umum');
Route::get('inggirs-raya/persyaratan', [PageController::class, 'persyaratan'])->name('persyaratan');
Route::get('inggirs-raya/keselamatan-keamanan', [PageController::class, 'keselamatanKeamanan'])->name('keselamatan-keamanan');
Route::get('inggirs-raya/hukum-kebiasaan', [PageController::class, 'hukumKebiasaan'])->name('hukum-kebiasaan');
Route::get('inggirs-raya/mata-uang', [PageController::class, 'mataUang'])->name('mata-uang');
Route::get('inggirs-raya/asuransi-kesehatan', [PageController::class, 'asuransiKesehatan'])->name('asuransi-kesehatan');
Route::get('inggirs-raya/telekomunikasi', [PageController::class, 'telekomunikasi'])->name('telekomunikasi');
Route::get('inggirs-raya/tempat-ibadah', [PageController::class, 'tempatIbadah'])->name('tempat-ibadah');
Route::get('inggirs-raya/fasilitas-kesehatan', [PageController::class, 'fasilitasKesehatan'])->name('fasilitas-kesehatan');
Route::get('inggirs-raya/kuliner', [PageController::class, 'kuliner'])->name('kuliner');
Route::get('inggirs-raya/tempat-wisata', [PageController::class, 'tempatWisata'])->name('tempat-wisata');

Route::get('himbauan', [PageController::class, 'himbauan'])->name('himbauan');
Route::get('himbauan/detail', [PageController::class, 'himbauanDetail'])->name('himbauan-detail');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\InfographicController;


Route::get('/storage-link', function(){
    $targetFolder = storage_path('app/public');
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder,$linkFolder);
}); 

// Rute untuk halaman utama yang menampilkan semua berita
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');
Route::get('/news/category/{slug}', [NewsController::class, 'category'])->name('news.category');
Route::get('/search', [NewsController::class, 'search'])->name('news.search');


Route::get('/', [ProfileController::class, 'index']);
Route::get('profile-sejarah', [ProfileController::class, 'sejarah']);
Route::get('profile-visidanmisi', [ProfileController::class, 'visidanmisi']);
Route::get('profile-tenagaahli', [ProfileController::class, 'tenagaAhli']);
Route::get('gallery-foto', [ProfileController::class, 'galleryFoto']);
Route::get('gallery-video', [ProfileController::class, 'galleryVideo']);
Route::get('pelayanan-persyaratan', [ProfileController::class, 'pelayananPersyaratan']);
Route::get('pelayanan-alur', [ProfileController::class, 'pelayananAlur']);
Route::get('aboutus', [ProfileController::class, 'aboutUs']);



Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

Route::get('/', [NewsController::class, 'index'])->name('index')->defaults('forHome', true);



Route::resource('pegawais', PegawaiController::class);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\SmartEnviController;
use App\Http\Controllers\SmartGovController;
use App\Http\Controllers\SmartBrandController;
use App\Http\Controllers\SmartLivController;
use App\Http\Controllers\SmartSocController;
use App\Http\Controllers\SmartEcoController;

use App\Http\Controllers\adminController;
use App\Http\Controllers\adminBeritaController;
use App\Http\Controllers\adminDokumenController;

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

// Route::get('/', function () {
//     return view('home');
// });

route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/SmartEnv', [SmartEnviController::class, 'index'])->name('SmartEnv');
Route::get('/SmartGov', [SmartGovController::class, 'index'])->name('SmartGov');
Route::get('/SmartBrand', [SmartBrandController::class, 'index'])->name('SmartBrand');
Route::get('/SmartLiv', [SmartLivController::class, 'index'])->name('SmartLiv');
Route::get('/SmartSoc', [SmartSocController::class, 'index'])->name('SmartSoc');
Route::get('/SmartEco', [SmartEcoController::class, 'index'])->name('SmartEco');

Route::get('/admin_smart', [adminController::class, 'index'])->name('admin_smart');
Route::get('/admin_berita', [adminBeritaController::class, 'index'])->name('admin_berita');
Route::get('/admin_dokumen', [adminDokumenController::class, 'index'])->name('admin_dokumen');

Route::get('/admin_berita/create', [adminBeritaController::class, 'create'])->name('admin_berita.create');
Route::post('/admin_berita/store', [adminBeritaController::class, 'store'])->name('admin_berita.store');
Route::get('/admin_berita/edit/{id}', [adminBeritaController::class, 'edit'])->name('admin_berita.edit');
Route::put('/admin_berita/{id}', [adminBeritaController::class, 'update'])->name('admin_berita.update');
Route::delete('/admin_berita/delete/{id}', [adminBeritaController::class, 'delete'])->name('admin_berita.delete');

Route::get('/admin_dokumen/create', [adminDokumenController::class, 'create'])->name('admin_dokumen.create');
Route::post('/admin_dokumen/store', [adminDokumenController::class, 'store'])->name('admin_dokumen.store');
Route::get('/admin_dokumen/edit/{id}', [adminDokumenController::class, 'edit'])->name('admin_dokumen.edit');
Route::put('/admin_dokumen/{id}', [adminDokumenController::class, 'update'])->name('admin_dokumen.update');
Route::delete('/admin_dokumen/delete/{id}', [adminDokumenController::class, 'delete'])->name('admin_dokumen.delete');

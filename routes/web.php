<?php

use App\Http\Controllers\DokumenConroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\SmartEnviController;
use App\Http\Controllers\SmartGovController;
use App\Http\Controllers\SmartBrandController;
use App\Http\Controllers\SmartLivController;
use App\Http\Controllers\SmartSocController;
use App\Http\Controllers\SmartEcoController;

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
Route::get('/Dokumen', [DokumenConroller::class, 'index'])->name('dokumen');
Route::get('/getData', [homeController::class, 'getData'])->name('getData');

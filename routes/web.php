<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\SmartEnviController;
use App\Http\Controllers\SmartBrandController;

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
Route::get('/SmartBrand', [SmartBrandController::class, 'index'])->name('SmartBrand');

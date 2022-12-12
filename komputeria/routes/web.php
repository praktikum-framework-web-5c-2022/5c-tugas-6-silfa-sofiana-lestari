<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\KategoriController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('kategori',[Kategori::class])->group(function(){
    Route::get('/', [KategoriController::class,'index'])->name('kategoris.index');
    Route::get('/create', [KategoriController::class,'create'])->name('kategoris.create');
    Route::post('/store', [KategoriController::class,'store'])->name('kategoris.store');
});

Route::prefix('hardware')->group(function(){
    Route::get('/create', [HardwareController::class,'create'])->name('hardwares.create');
    Route::post('/store', [HardwareController::class,'store'])->name('hardwares.store');
    Route::get('/edit/{hardware}', [HardwareController::class,'edit'])->name('hardwares.edit');
    Route::put('/update/{hardware}', [HardwareController::class,'update'])->name('hardwares.update');
    Route::delete('/delete/{hardware}', [HardwareController::class,'destroy'])->name('hardwares.destroy');
});



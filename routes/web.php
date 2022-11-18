<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', [App\Http\Controllers\ParkirController::class, 'masuk'])->name('masuk');
Route::post('/tambah_masuk',[App\Http\Controllers\ParkirController::class, 'tambah'])->name('tambah_masuk');
Route::get('/keluar', [App\Http\Controllers\ParkirController::class, 'keluar'])->name('keluar');
Route::get('/keluar/{id}',[App\Http\Controllers\ParkirController::class, 'edit'])->name('edit');
Route::post('/update/{id}',[App\Http\Controllers\ParkirController::class, 'update'])->name('update');
Route::get('/result', [App\Http\Controllers\ParkirController::class, 'result']);




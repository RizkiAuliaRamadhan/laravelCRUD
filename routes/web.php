<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
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

// Route::get('/mahasiswas', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('mahasiswas.index');
// Route::get('/mahasiswas/create', [App\Http\Controllers\MahasiswaController::class, 'create'])->name('mahasiswas.create');
// Route::post('/mahasiswas', [\App\Http\Controllers\MahasiswaController::class, 'store'])->name('mahasiswas.store');
// Route::get('/mahasiswas/{mahasiswa}', [\App\Http\Controllers\MahasiswaController::class, 'show'])->name('mahasiswas.show');
// Route::get('/mahasiswas/{mahasiswa}/edit', [\App\Http\Controllers\MahasiswaController::class, 'edit'])->name('mahasiswas.edit');
// Route::patch('/mahasiswas/{mahasiswa}', [\App\Http\Controllers\MahasiswaController::class, 'update'])->name('mahasiswas.update');
// Route::delete('/mahasiswa/{mahasiswa}', [\App\Http\Controllers\MahasiswaController::class, 'destroy'])->name('mahasiswas.destroy');

Route::resource('mahasiswas', MahasiswaController::class);

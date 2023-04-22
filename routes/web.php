<?php

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


Route::get('/', function () {
    return view('welcome');
}); */


use App\Http\Controllers\AnotacionController;

Route::get('/', [AnotacionController::class, 'index'])->name('anotaciones.index');
Route::get('/anotaciones/create', [AnotacionController::class, 'create'])->name('anotaciones.create');
Route::post('/anotaciones', [AnotacionController::class, 'store'])->name('anotaciones.store');
Route::get('/anotaciones/{anotacion}', [AnotacionController::class, 'show'])->name('anotaciones.show');
Route::get('/anotaciones/{anotacion}/edit', [AnotacionController::class, 'edit'])->name('anotaciones.edit');
Route::put('/anotaciones/{anotacion}', [AnotacionController::class, 'update'])->name('anotaciones.update');
Route::delete('/anotaciones/{anotacion}', [AnotacionController::class, 'destroy'])->name('anotaciones.destroy');

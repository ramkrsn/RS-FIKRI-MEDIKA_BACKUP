<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\AntrianController;

Route::get('/', [AntrianController::class, 'index']);

Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');

Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');
Route::get('/admin/artikel', [ArtikelController::class, 'admin'])->name('artikel.admin');
Route::post('/admin/artikel', [ArtikelController::class, 'store'])->name('artikel.store');
Route::patch('/admin/artikel/{id}', [ArtikelController::class, 'update'])->name('artikel.update');
Route::delete('/admin/artikel/{id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');


Route::get('/manage-obat', [ObatController::class, 'showManageObat']);
Route::post('/manage-obat', [ObatController::class, 'addObat'])->name('obat.add');
Route::delete('/delete-obat/{id}', [ObatController::class, 'deleteObat'])->name('data-obat.delete');

Route::get('/queue', [AntrianController::class, "index"])->name('queue.index');
Route::get('/antrian-obat', [AntrianController::class, "getAntrianObat"]);

Route::get('/home', [AntrianController::class, "home"]);




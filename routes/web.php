<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PengambilanObatController;
use App\Http\Controllers\MelihatJadwalController;
use App\Http\Controllers\DoctorController;  
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KamarController;


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
Route::get('/dokter', [DoctorController::class, 'index']);


Route::get('createdokter', [DoctorController::class, 'doctor']);
Route::post('createdokter', [DoctorController::class, 'createdoctor']);

Route::get('updatedokter/{iddokter}/update', [DoctorController::class, 'edit_doctor']);
Route::patch('updatedokter/{iddokter}/update', [DoctorController::class, 'updatedoctor']);

Route::delete('/deletedoctor/{iddokter}/delete', [DoctorController::class, 'destroydoctor']);

Route::get('/jadwalpertemuan', [JadwalController::class, 'index']);

Route::post('/jadwalpertemuan', [JadwalController::class, 'store'])->name('jadwalpertemuan');

Route::get('/', function () {
    return view('profil');
})->name('profil');

Route::get('/queue', [AntrianController::class, "index"])->name('queue.index');
Route::get('/queue/{id}', [AntrianController::class, "show"])->name('queue.show');

// routes/web.php


Route::get('/login', function () {
    return view('login'); // login.blade.php
})->name('login');

Route::get('/register', function () {
    return view('register'); // register.blade.php
})->name('register');

// Route untuk menampilkan form registrasi
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Route untuk menangani pengiriman form registrasi
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::resource('obat', ObatController::class);

Route::get('/pengambilan-obat', [PengambilanObatController::class, 'pengambilan_obat']);


Route::get('/Melihat_Jadwal_Dokter',[ MelihatJadwalController::class, 'index']);

Route::get('/kamar', [KamarController::class, 'index']);


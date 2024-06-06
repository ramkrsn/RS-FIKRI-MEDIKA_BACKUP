<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PengambilanObatController;
use App\Http\Controllers\MelihatJadwalController;
use App\Http\Controllers\DoctorController;  
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\KunjunganPasienController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AuthController;

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

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', function () {
    return view('login'); // login.blade.php
})->name('login');

Route::get('/register', function () {
    return view('register'); // register.blade.php
})->name('register');


Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::resource('obat', ObatController::class);

Route::get('/pengambilan-obat', [PengambilanObatController::class, 'pengambilan_obat']);


Route::get('/Melihat_Jadwal_Dokter',[ MelihatJadwalController::class, 'index']);

Route::get('/kamar', [KamarController::class, 'index']);

Route::get('/KunjunganPasien', function () {
    return view('KunjunganPasien');
});

Route::post('/KunjunganPasien', [KunjunganPasienController::class, 'index']);
Route::get('/KunjunganPasienCek', [KunjunganPasienController::class, 'showScheduleForm']);
Route::post('/KunjunganPasienCek', [KunjunganPasienController::class, 'JadwalKunjungan']);

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
Route::post('/feedback', [FeedbackController::class, 'submit'])->name('feedback.submit');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

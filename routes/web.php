<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PengambilanObatController;
use App\Http\Controllers\MelihatJadwalController;
use App\Http\Controllers\DoctorController;  
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KunjunganPasienController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\ManajemenAntrianController;
use App\Http\Controllers\MenerimaKunjunganController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminFeedbackController;
use App\Http\Controllers\InformasiObatController;
use App\Http\Controllers\PasienController;


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
Route::post('/logout', 'AuthLoginController@logout')->name('logout');

Route::resource('obat', ObatController::class);
Route::resource('informasiobat', InformasiObatController::class);
    
Route::get('/pengambilan-obat', [PengambilanObatController::class, 'pengambilan_obat']);


Route::get('/Melihat_Jadwal_Dokter', [ MelihatJadwalController::class, 'index']);

Route::get('/kamar', [KamarController::class, 'index']);

Route::get('createkamar', [KamarController::class, 'kamar']);
Route::post('createkamar', [KamarController::class, 'createkamar']);

Route::get('updatekamar/{idkamar}/update', [KamarController::class, 'editkamar']);
Route::patch('updatekamar/{idkamar}/update', [KamarController::class, 'updatekamar']);

Route::delete('/deletekamar/{idkamar}/delete', [KamarController::class, 'destroykamar']);

Route::get('/KunjunganPasien', [KunjunganPasienController::class, 'index']);
Route::post('/KunjunganPasien', [KunjunganPasienController::class, 'Store'])->name('KunjunganPasien'); 



Route::get('/fasilitas', [FasilitasController::class, 'index']);

Route::get('/MenerimaReservasi', [ReservasiController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');

Route::post('/feedback', [FeedbackController::class, 'submit'])->name('feedback.submit');
Route::get('/admin/feedback', [AdminFeedbackController::class, 'index'])->name('admin.feedback.index');

//Reservasi Obat
Route::get('/reservasi-obat', [ObatController::class, 'showReservasiObat']);
Route::put('/reservasi-obat/{id}', [ObatController::class, 'updateStatusReservasi'])->name('reservasi-obat.update');
Route::get('/reservasi-obat/{id}', [ObatController::class, 'deleteReservasi'])->name('reservasi-obat.delete');
// End Reservasi Obat


//manage obat//
Route::get('/', function () {
    return view('profil');
})->name('profil');

Route::get('/manage-obat', [ObatController::class, 'showManageObat']);
Route::post('/manage-obat', [ObatController::class, 'addObat'])->name('obat.add');
Route::delete('/delete-obat/{id}', [ObatController::class, 'deleteObat'])->name('data-obat.delete');

Route::get('/queue', [AntrianController::class, "index"])->name('queue.index');
Route::get('/queue/{id}', [AntrianController::class, "show"])->name('queue.show');
Route::get('/antrian-obat', [AntrianController::class, "getAntrianObat"]);
//end manage obat//

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//artikel
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');

Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');
Route::get('/admin/artikel', [ArtikelController::class, 'admin'])->name('artikel.admin');
Route::post('/admin/artikel', [ArtikelController::class, 'store'])->name('artikel.store');
Route::patch('/admin/artikel/{id}', [ArtikelController::class, 'update'])->name('artikel.update');
Route::delete('/admin/artikel/{id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');
//end artikel

Route::get('/antrianhome', [AntrianController::class, "home"]);

Route::get('/manage-antrian', [ManajemenAntrianController::class, "index"]);
Route::put('/manage-antrian/{id}', [ManajemenAntrianController::class, 'updateStatusAntrian'])->name('manage-antrian.update');
// Route::delete('/deleteantrian/{idjadwalpertemuan}/delete', [ManajemenAntrianController::class, 'destroyantrian']);


route::get('/menerimakunjungan', [MenerimaKunjunganController::class, "index"]);
Route::delete('/deletekunjungan/{idkunjungan}', [MenerimaKunjunganController::class, 'deletekunjungan']);
Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');


Route::get('/informasiobat', [InformasiObatController::class, 'index'])->name('informasiobat.index');
Route::get('/informasiobat/create', [InformasiObatController::class, 'create'])->name('informasiobat.create');
Route::post('/informasiobat/store', [InformasiObatController::class, 'store'])->name('informasiobat.store');
Route::get('/informasiobat/{informasiobat}', [InformasiObatController::class, 'show'])->name('informasiobat.show');
Route::get('/informasiobat/{informasiobat}/edit', [InformasiObatController::class, 'edit'])->name('informasiobat.edit');
Route::put('/informasiobat/{informasiobat}', [InformasiObatController::class, 'update'])->name('informasiobat.update');
Route::delete('/informasiobat/{informasiobat}', [InformasiObatController::class, 'destroy'])->name('informasiobat.destroy');

//pasien
Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');
Route::get('/pasien/create', [PasienController::class, 'createpasien'])->name('pasien.create');
Route::post('/pasien', [PasienController::class, 'store'])->name('pasien.store');
Route::get('/pasien/{id}/edit', [PasienController::class, 'editpasien'])->name('pasien.edit');
Route::patch('/pasien/{id}/edit', [PasienController::class, 'updatepasien'])->name('pasien.update');
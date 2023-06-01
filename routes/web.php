<?php

use App\Http\Controllers\Auth\LoginController;
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
*/

Route::get('/', 'App\Http\Controllers\HomepageController@index')->name('homepage');

// Route::get('/', 'App\Http\Controllers\Dashboard\KepegawaianController@index');
// Route::get('/', 'App\Http\Controllers\HomepageController@index')->name('homepage');
// Route::get('/kepeg', 'App\Http\Controllers\HomepageController@index')->name('homepage');
// Route::get('/', function () {
//     return view('dashboard.dashboard');
// });

// Route::get('/', 'App\Http\Controllers\Dashboard\DashboardController@index');
// Route::get('/api', function () {
//     return view('layout_eksekutif.api');
// });

// Dashboard
Route::group(['prefix' => 'dashboard', 'middleware' => 'semar'], function () {
    Route::get('/mahasiswa', 'App\Http\Controllers\Dashboard\MahasiswaController@index')->name('dashboard.mahasiswa.index');
    Route::get('/', 'App\Http\Controllers\Dashboard\DashboardController@index')->name('dashboard.dashboard.index');
    Route::get('/kepeg', 'App\Http\Controllers\Dashboard\KepegawaianController@index')->name('dashboard.kepegawaian.index');
    Route::get('/keuangan', 'App\Http\Controllers\Dashboard\KeuanganController@index')->name('dashboard.keuangan.index');


    Route::get('/tahun', 'App\Http\Controllers\Dashboard\DashboardController@tahun');
    Route::get('/fakultas', 'App\Http\Controllers\Dashboard\DashboardController@fakultas');
    Route::get('/jenjang', 'App\Http\Controllers\Dashboard\DashboardController@jenjang');
    Route::get('/dsnFakultas', 'App\Http\Controllers\Dashboard\DashboardController@dsnFakultas');
    Route::get('/dsnJenjang', 'App\Http\Controllers\Dashboard\DashboardController@dsnJenjang');
});

// Autentikasi
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', 'App\Http\Controllers\AksesController@authentication')->name('login.authentication');
Route::get('/logout', 'App\Http\Controllers\AksesController@logout')->name('logout');
Route::get('/sess', 'App\Http\Controllers\AksesController@sess')->name('sess');

// Kepegawaian
Route::group(['prefix' => 'kepegawaian', 'middleware' => 'semar'], function () {

    // Tendik
    Route::get('/tendik', 'App\Http\Controllers\Kepegawaian\TendikController@index');
    Route::get('/jml_tendik', 'App\Http\Controllers\Kepegawaian\TendikController@jumlah');
    Route::get('/gol_tendik', 'App\Http\Controllers\Kepegawaian\TendikController@golongan');
    Route::get('/stat_tendik', 'App\Http\Controllers\Kepegawaian\TendikController@status');
    Route::get('/usia_tendik', 'App\Http\Controllers\Kepegawaian\TendikController@usia');

    // Dosen
    Route::get('/dosen', 'App\Http\Controllers\Kepegawaian\DosenController@index');
    Route::get('/jenj_dosen', 'App\Http\Controllers\Kepegawaian\DosenController@jenjang');
    Route::get('/jabt_dosen', 'App\Http\Controllers\Kepegawaian\DosenController@jabatan');
    Route::get('/stat_dosen', 'App\Http\Controllers\Kepegawaian\DosenController@status');
    Route::get('/fak_dosen', 'App\Http\Controllers\Kepegawaian\DosenController@fakultas');
    Route::get('/kelm_dosen', 'App\Http\Controllers\Kepegawaian\DosenController@kelamin');
    Route::get('/stud_dosen', 'App\Http\Controllers\Kepegawaian\DosenController@studi');
    Route::get('/usia_dosen', 'App\Http\Controllers\Kepegawaian\DosenController@Usia');
});

// Kemahasiswaan
Route::group(['prefix' => 'kemahasiswaan', 'middleware' => 'semar'], function () {
    Route::get('/', 'App\Http\Controllers\Kemahasiswaan\KemahasiswaanController@index');
    Route::get('/jml_mahasiswa', 'App\Http\Controllers\Kemahasiswaan\KemahasiswaanController@jumlah');
});

// Keuangan
Route::group(['prefix' => 'keuangan', 'middleware' => 'semar'], function () {
    Route::get('/', 'App\Http\Controllers\Keuangan\KeuanganController@index');
    Route::get('/keuangan', 'App\Http\Controllers\Keuangan\KeuanganController@keuangan');
});

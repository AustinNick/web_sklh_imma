<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\userController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\ekskulController;
use App\Http\Controllers\historySController;
use App\Http\Controllers\jurusanController;
use App\Http\Controllers\karyasiswaController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\downController;
use App\Http\Controllers\mapelController;
use App\Http\Controllers\homeController;

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

// Bagian Admin
Route::get('/admin', function () {
    return view('admin.admin');
});


// Bagian User
Route::get('/admin/user', [userController::class, 'index']);
Route::get('/admin/user/create', [userController::class, 'create']);
Route::get('/admin/user/edit/{id}', [userController::class, 'edit']);


// Bagian Contact
Route::get('/admin/contact', [contactController::class, 'index']);
Route::get('/admin/contact/create', [contactController::class, 'create']);
Route::get('/admin/contact/edit/{id}', [contactController::class, 'edit']);


// Bagian Ekskul
Route::get('/admin/ekskul', [ekskulController::class, 'index']);
Route::get('/admin/ekskul/create', [ekskulController::class, 'create']);
Route::get('/admin/ekskul/edit/{id}', [ekskulController::class, 'edit']);


// Bagian History Siswa
Route::get('/admin/historysiswa', [historySController::class, 'index']);
Route::get('/admin/historysiswa/create', [historySController::class, 'create']);
Route::get('/admin/historysiswa/edit/{id}', [historySController::class, 'edit']);


// Bagian Jurusan
Route::get('/admin/jurusan', [jurusanController::class, 'index']);
Route::get('/admin/jurusan/create', [jurusanController::class, 'create']);
Route::get('/admin/jurusan/edit/{id}', [jurusanController::class, 'edit']);


// Bagian Karya Siswa
Route::get('/admin/karyasiswa', [karyasiswaController::class, 'index']);
Route::get('/admin/karyasiswa/create', [karyasiswaController::class, 'create']);
Route::get('/admin/karyasiswa/edit/{id}', [karyasiswaController::class, 'edit']);


// Bagian News
Route::get('/admin/news', [newsController::class, 'index']);
Route::get('/admin/news/create', [newsController::class, 'create']);
Route::get('/admin/news/edit/{id}', [newsController::class, 'edit']);


// Bagian Mapel
Route::get('/admin/mapel', [mapelController::class, 'index']);
Route::get('/admin/mapel/create', [mapelController::class, 'create']);
Route::get('/admin/mapel/edit/{id}', [mapelController::class, 'edit']);


// Bagian Download
Route::get('/admin/download', [downController::class, 'index']);
Route::get('/admin/download/create', [downController::class, 'create']);
Route::get('/admin/download/edit/{id}', [downController::class, 'edit']);



// Bagian Client
Route::get('/home', [homeController::class, "index"]);
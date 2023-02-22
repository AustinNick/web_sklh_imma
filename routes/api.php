<?php

use Illuminate\Http\Request;
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

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Bagian User
Route::get('/user/data', [userController::class, 'show']);
Route::post('/user/tambah', [userController::class, 'store']);
Route::put('/user/edit/{id}', [userController::class, 'update']);
Route::delete('/user/delete/{id}', [userController::class, 'destroy']);


// Bagian Contact
Route::get('/contact/data', [contactController::class, 'show']);
Route::post('/contact/tambah', [contactController::class, 'store']);
Route::delete('/contact/delete/{id}', [contactController::class, 'destroy']);


//Bagian Ekskul
Route::get('/ekskul/data', [ekskulController::class, 'show']);
Route::post('/ekskul/tambah', [ekskulController::class, 'store']);
Route::put('/ekskul/edit/{id}', [ekskulController::class, 'update']);
Route::delete('/ekskul/delete/{id}', [ekskulController::class, 'destroy']);


//Bagian History Siswa
Route::get('/historysiswa/data', [historySController::class, 'show']);
Route::post('/historysiswa/tambah', [historySController::class, 'store']);
Route::put('/historysiswa/edit/{id}', [historySController::class, 'update']);
Route::delete('/historysiswa/delete/{id}', [historySController::class, 'destroy']);


//Bagian Jurusan
Route::get('/jurusan/data', [jurusanController::class, 'show']);
Route::post('/jurusan/tambah', [jurusanController::class, 'store']);
Route::put('/jurusan/edit/{id}', [jurusanController::class, 'update']);
Route::delete('/jurusan/delete/{id}', [jurusanController::class, 'destroy']);


//Bagian Karya Siswa
Route::get('/karyasiswa/data', [karyasiswaController::class, 'show']);
Route::post('/karyasiswa/tambah', [karyasiswaController::class, 'store']);
Route::put('/karyasiswa/edit/{id}', [karyasiswaController::class, 'update']);
Route::delete('/karyasiswa/delete/{id}', [karyasiswaController::class, 'destroy']);


//Bagian News
Route::get('/news/data', [newsController::class, 'show']);
Route::post('/news/tambah', [newsController::class, 'store']);
Route::put('/news/edit/{id}', [newsController::class, 'update']);
Route::delete('/news/delete/{id}', [newsController::class, 'destroy']);


//Bagian Mapel
Route::get('/mapel/data', [mapelController::class, 'show']);
Route::post('/mapel/tambah', [mapelController::class, 'store']);
Route::put('/mapel/edit/{id}', [mapelController::class, 'update']);
Route::delete('/mapel/delete/{id}', [mapelController::class, 'destroy']);


//Bagian Download
Route::get('/download/data', [downController::class, 'show']);
Route::post('/download/tambah', [downController::class, 'store']);
Route::put('/download/edit/{id}', [downController::class, 'update']);
Route::delete('/download/delete/{id}', [downController::class, 'destroy']);
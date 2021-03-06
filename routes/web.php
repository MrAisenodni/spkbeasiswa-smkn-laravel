<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\SubkriteriaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\RankController;

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

// Login
Route::get('/login', [LoginController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

// Dashboard
Route::get('/admin', [PageController::class, 'admin']);

// Kriteria
Route::get('/admin/kriteria', [KriteriaController::class, 'index']);
Route::get('/admin/kriteria/create', [KriteriaController::class, 'create']);
Route::get('/admin/kriteria/{id}', [KriteriaController::class, 'show']);
Route::get('/admin/kriteria/{id}/edit', [KriteriaController::class, 'edit']);
Route::post('/admin/kriteria', [KriteriaController::class, 'store']);
Route::put('/admin/kriteria/{id}', [KriteriaController::class, 'update']);
Route::delete('/admin/kriteria/{id}', [KriteriaController::class, 'destroy']);

// Subkriteria
Route::get('/admin/subkriteria', [SubkriteriaController::class, 'index']);
Route::get('/admin/subkriteria/create', [SubkriteriaController::class, 'create']);
Route::get('/admin/subkriteria/{id}', [SubkriteriaController::class, 'show']);
Route::get('/admin/subkriteria/{id}/edit', [SubkriteriaController::class, 'edit']);
Route::post('/admin/subkriteria', [SubkriteriaController::class, 'store']);
Route::put('/admin/subkriteria/{id}', [SubkriteriaController::class, 'update']);
Route::delete('/admin/subkriteria/{id}', [SubkriteriaController::class, 'destroy']);

// Siswa
Route::get('/admin/siswa', [SiswaController::class, 'index']);
Route::get('/admin/siswa/create', [SiswaController::class, 'create']);
Route::get('/admin/siswa/{id}', [SiswaController::class, 'show']);
Route::get('/admin/siswa/{id}/edit', [SiswaController::class, 'edit']);
Route::post('/admin/siswa', [SiswaController::class, 'store']);
Route::put('/admin/siswa/{id}', [SiswaController::class, 'update']);
Route::delete('/admin/siswa/{id}', [SiswaController::class, 'destroy']);

// Siswa
Route::get('/admin/pendaftaran', [PendaftaranController::class, 'index']);
Route::get('/admin/pendaftaran/create', [PendaftaranController::class, 'create']);
Route::get('/admin/pendaftaran/{id}', [PendaftaranController::class, 'show']);
Route::get('/admin/pendaftaran/{id}/edit', [PendaftaranController::class, 'edit']);
Route::post('/admin/pendaftaran', [PendaftaranController::class, 'store']);
Route::put('/admin/pendaftaran/{id}', [PendaftaranController::class, 'update']);
Route::delete('/admin/pendaftaran/{id}', [PendaftaranController::class, 'destroy']);

// Ranking
Route::get('/admin/rank', [RankController::class, 'index']);
Route::get('/admin/rank/create', [RankController::class, 'create']);
Route::get('/admin/rank/{id}', [RankController::class, 'show']);
Route::post('/admin/rank', [RankController::class, 'store']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\SubkriteriaController;

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
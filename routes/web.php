<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\JobController;

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

Route::get('/', [SchoolController::class, 'index']);
Route::get('/schools/{id}', [SchoolController::class, 'edit']);
Route::post('/schools', [SchoolController::class, 'store']);
Route::post('/schools/{id}', [SchoolController::class, 'update']);

Route::get('/people', [PersonController::class, 'index']);
Route::post('/people', [PersonController::class, 'store']);
Route::post('/people/{id}', [PersonController::class, 'destroy']);

Route::post('/jobs', [JobController::class, 'store']);
Route::post('/jobs/delete', [JobController::class, 'destroy']);



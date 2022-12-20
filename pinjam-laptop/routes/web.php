<?php

use App\Http\Controllers\LaptopController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LaptopController::class, 'index']);
Route::get('/data', [LaptopController::class, 'data']);
Route::get('/create', [LaptopController::class, 'create']);
Route::post('/store', [LaptopController::class, 'store']);
Route::patch('/done/{id}', [LaptopController::class, 'done']);
Route::delete('/delete/{id}', [LaptopController::class, 'destroy']);

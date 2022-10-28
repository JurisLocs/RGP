<?php

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

Route::get('/', [\App\Http\Controllers\UserController::class, 'index']);
Route::get('/{user}', [\App\Http\Controllers\UserController::class, 'show']);

Route::get('/create/user',[\App\Http\Controllers\UserController::class, 'create']);
Route::post('/create/user',[\App\Http\Controllers\UserController::class, 'store']);
Route::get('/{user}/edit',[\App\Http\Controllers\UserController::class, 'edit']);
Route::put('/{user}/edit',[\App\Http\Controllers\UserController::class, 'update']);
Route::delete('/{user}',[\App\Http\Controllers\UserController::class, 'destroy']);

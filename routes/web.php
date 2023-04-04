<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('main');
})->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'] )->middleware('auth');
Route::post('/profile/update', [ProfileController::class, 'update'] )->middleware('auth');
Route::get('/register', [ProfileController::class, 'register'] )->middleware('guest');
Route::post('/register', [ProfileController::class, 'addUser'] )->middleware('guest');


Route::get('/login', [AuthController::class, 'index'] )->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'] );
Route::get('/logout', [AuthController::class, 'logout'] );


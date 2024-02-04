<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'welcome']);
Route::get('/logout', [WelcomeController::class, 'logout']);
Route::get('/login', [LoginController::class, 'login'])->name('login');
// Route::post('/beranda', [LoginController::class, 'beranda']);
Route::get('/home', [LoginController::class, 'home']);
Route::post('/submitLogin', [LoginController::class, 'submitLogin']);
Route::get('/daftar', [DaftarController::class, 'daftar']);
Route::post('/simpan', [DaftarController::class, 'simpan'])->name('simpan');

<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UploadController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [UploadController::class, 'index'])->name('upload.index');
Route::get('/create', [UploadController::class, 'create'])->name('upload.create');
Route::post('/', [UploadController::class, 'store'])->name('upload.store');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

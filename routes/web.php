<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RegisterController;
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

Route::middleware('auth')->group(function () {
    Route::post('v_edit/{id}', [MahasiswaController::class, 'update'])->name('postupdate');
    Route::post('v_edit/{id}', [MahasiswaController::class, 'destroy'])->name('postdelete');
    Route::get('v_edit/{id}', [MahasiswaController::class, 'edit'])->name('getedit');
    Route::get('v_input', [MahasiswaController::class, 'create'])->name('getinput');
    Route::post('v_input', [MahasiswaController::class, 'store'])->name('input');
    Route::get('logout', LogoutController::class)->name('logout');
});


Route::get('/', [HomeController::class, 'homeview']);


Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterController::class, 'create'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register');
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login');
});

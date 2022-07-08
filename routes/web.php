<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'do_regis'])->name('do-regis');
Route::post('/login', [LoginController::class, 'do_login'])->name('do-login');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('profil');
    Route::get('/edit/profile/{id}', [UserController::class, 'show'])->name('edit-profile');
    Route::post('/edit/profile/update', [UserController::class, 'update'])->name('update-profile');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

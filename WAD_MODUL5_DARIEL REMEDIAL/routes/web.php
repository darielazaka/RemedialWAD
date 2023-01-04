<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShowroomController;

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
    return view('welcome');
});

Route::get('Login', [LoginController::class, 'index']);
Route::get('Register', [RegisterController::class, 'index']);
// fungsi login kebawah
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('index', [HomeController::class, 'index']);
Route::get('Home', [HomeController::class, 'Home']);
Route::get('TambahGoods', [ShowroomController::class, 'TambahMobil']);
Route::get('DetailGoods/{id}', [ShowroomController::class, 'detailnya']);
Route::get('delete/{id}', [ShowroomController::class, 'detailnya']);
Route::get('Users/Profile', [UserController::class, 'index']);
// Route::resource('posts', ShowroomController::class);


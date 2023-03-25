<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PageController;
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
// Route::get('/login', [LoginController::class,'process_login']);

// Route::get('/register', [PageController::class,'register']);

// Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/login', [LoginController::class, 'show_login_form'])->name('login');
Route::post('/login', [LoginController::class, 'process_login'])->name('login');
Route::get('/register', [LoginController::class, 'show_signup_form'])->name('register');
Route::post('/register', [LoginController::class, 'process_signup']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::group(["middleware" => "auth"], function () {
    Route::get('/', [PageController::class, 'home']);
    Route::get('/dashboard', [PageController::class, 'dashboard']);
    Route::get('/showAddForm', [PageController::class, 'showAddForm']);
    Route::post('/add', [PageController::class, 'add']);
});
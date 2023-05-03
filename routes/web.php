<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [UsersController::class, "showLogin"])->name("login-page");
Route::get('/register', [UsersController::class, "showRegister"])->name("register-page");
Route::get('/', [PostsController::class, "showMain"])->name("main-page");
Route::get('/post/{id}', [PostsController::class, "showInfo"])->name("info-page");
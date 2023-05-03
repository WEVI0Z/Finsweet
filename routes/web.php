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

Route::get('/login', [UsersController::class, "showLogin"]);
Route::get('/register', [UsersController::class, "showRegister"]);
Route::get('/', [PostsController::class, "showMain"]);
Route::get('/post/{id}', [PostsController::class, "showInfo"]);
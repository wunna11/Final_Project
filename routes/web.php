<?php

use App\Http\Controllers\AuthController;
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
//Authentication
Route::get('/login', [AuthController::class, "login"])->name('login');
Route::get('/register', [AuthController::class, "register"])->name('register');

Route::get('/', [PageController::class, "index"])->name('home');    //home page

Route::get('/user/userProfile', [PageController::class, "userProfile"])->name('userProfile');       //userProfile page

Route::get('/user/contactUs', [PageController::class, "contactUs"])->name('contactUs');             //contactUs page

Route::get('/user/createPost', [PageController::class, "createPost"])->name('createPost');         //createPost page



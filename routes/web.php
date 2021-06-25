<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
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
Route::middleware('guest')->group(function() {
    //Authentication
    Route::get('/login', [AuthController::class, "login"])->name('login');
    Route::post('/login', [AuthController::class, "post_login"])->name('post_login');
    Route::get('/register', [AuthController::class, "register"])->name('register');
    Route::post('/register', [AuthController::class, "post_register"])->name('post_register');
});



Route::middleware('auth')->group(function() {
    //home
    Route::get('/', [PageController::class, "index"])->name('home');    

    //user
    Route::get('/user/userProfile', [PageController::class, "userProfile"])->name('userProfile');       //userProfile page
    Route::post('/user/userProfile', [PageController::class, "post_userProfile"])->name('post_userProfile');
    Route::get('/user/contactUs', [PageController::class, "contactUs"])->name('contactUs');             //contactUs page
    Route::get('/user/createPost', [PageController::class, "createPost"])->name('createPost');         //createPost page
    Route::post('/user/createPost', [PageController::class, "post"])->name('post');
    Route::get('user/showPost/{id}', [PageController::class, "showPostById"])->name('showPostById');       //show post detail
    Route::get('/user/showPost/delete/{id}', [PageController::class, "deletePost"])->name('deletePost');    //delete post
    Route::get('user/edit/{id}', [PageController::class, "editPost"])->name('editPost');
    Route::post('user/update/{id}', [PageController::class, "updatePost"])->name('updatePost');

    //admin
    Route::get('/admin/index', [AdminController::class, "index"])->name('admin.index');
    Route::get('/admin/manage_premium_user', [AdminController::class, "manage_premium_user"])->name('admin.manage_premium_user');
    Route::get('/admin/contact_message', [AdminController::class, "contact_message"])->name('admin.contact_message');
    //logout
    Route::get('/logout', [AuthController::class, "logout"])->name('logout');
});





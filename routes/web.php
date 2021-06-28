<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
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

    //page or blade file
    Route::get('/user/userProfile', [PageController::class, "userProfile"])->name('userProfile');       //userProfile page
    Route::get('/user/contactUs', [PageController::class, "contactUs"])->name('contactUs');             //contactUs page
    Route::get('/user/createPost', [PageController::class, "createPost"])->name('createPost');         //createPost page
    Route::get('/user/edit/{id}', [PageController::class, "editPost"])->name('editPost');
    Route::get('/user/post/{id}', [PageController::class, "showPostById"])->name('showPostById');       //show post detail

    //post
    Route::post('/user/createPost', [PostController::class, "post"])->name('post');
    Route::get('/post/delete/{id}', [PostController::class, "deletePost"])->name('deletePost');    //delete post
    Route::post('/user/update/{id}', [PostController::class, "updatePost"])->name('updatePost');

    //ContactUsController
    Route::post('/user/contactUs/', [ContactUsController::class, "post_contact_us"])->name('post_contact_us');
    Route::get('/admin/contact_message/edit/{id}', [ContactUsController::class, "editMessage"])->name('editMessage');
    Route::post('/admin/contact_message/update/{id}', [ContactUsController::class, "updateMessage"])->name('updateMessage');
    Route::get('/admin/contact_message/delete/{id}', [ContactUsController::class, "deleteMessage"])->name('deleteMessage');

    //user
    Route::post('/user/userProfile', [AuthController::class, "post_userProfile"])->name('post_userProfile');    //update userprofile

    //admin
    Route::get('/admin/index', [AdminController::class, "index"])->name('admin.index');
    Route::get('/admin/manage_premium_user', [AdminController::class, "manage_premium_user"])->name('admin.manage_premium_user');
    Route::get('/admin/manage_premium_user/delete/{id}', [AdminController::class, "deleteUser"])->name('deleteUser');       //delete user
    Route::get('/admin/contact_message', [AdminController::class, "contact_message"])->name('admin.contact_message');
    
    //logout
    Route::get('/logout', [AuthController::class, "logout"])->name('logout');
});





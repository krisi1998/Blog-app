<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Same as above:
Route::get('/', [PagesController::class,'index'])->name('home');
Route::get('/about', [PagesController::class,'about']);
Route::get('/services', [PagesController::class,'services']);

Route::get('/register',[RegisterController::class,'register'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'store']);

Route::post('/logout',[LogoutController::class,'store'])->name('logout');

Route::get('/user/{user:name}/posts', [UserPostController::class,'index'])->name('user.posts');

Route::get('/dashboard',[PagesController::class,'dashboard'])
    ->name('dashboard')
    ->middleware('auth');

Route::get('/posts',[PostController::class,'index'])->name('posts');
Route::post('/posts',[PostController::class,'store']);
Route::delete('/posts/{post}',[PostController::class,'destroy'])->name('posts.destroy');

Route::post('/posts/{post}/likes',[PostLikeController::class,'store'])->name('posts.like');
Route::delete('/posts/{post}/likes',[PostLikeController::class,'destroy'])->name('posts.like');

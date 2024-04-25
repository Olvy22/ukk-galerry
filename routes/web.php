<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\CustomAuthController;
// Use App\Http\Controllers\FotoController;
Use App\Http\Controllers\ImageController;


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

Route::post('/image-store', [ImageController::class, 'storeImage'])->name('image-store');
Route::get('/image', [ImageController::Class, 'index'])->name('image.index');
Route::get('/', [ImageController::class, 'welcome'])->name('welcome');
Route::get('dashboard', [CustomAuthController::class, 'homepage']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('postlogin', [CustomAuthController::class, 'login'])->name('postlogin');
Route::get('signup', [CustomAuthController::class, 'signup'])->name('register-user');
// Route::resource("fotos", FotoController::class);
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup');
Route::post('/signout', [CustomAuthController::class, 'signOut'])->name('signOut');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');s
// Route::get('/isi', [App\Http\Controllers\HomeController::class, 'isi'])->name('isi');



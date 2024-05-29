<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;


Route::get('/home', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
// routes/web.php
Route::get('/login', function () {
    return view('login'); // Hiển thị form đăng nhập
});

Route::post('/login', [LoginController::class, 'authenticate']); // Xử lý dữ liệu đăng nhập
// routes/web.php
Route::get('/user', 'UserController@index')->name('user');
// routes/web.php

use App\Http\Controllers\UserController;

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/upload', [UserController::class, 'upload'])->name('user.upload');
Route::get('/user/search', [UserController::class, 'search'])->name('user.search');
Route::get('/user/messages', [UserController::class, 'messages'])->name('user.messages');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', 'AdminController@index')->name('admin.index');
});







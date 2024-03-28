<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ProductController;
use App\Models\Product;

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

Route::get('/', function () {
    return view('index');
});


Route::get('/home', function () {
    return view('index');
});


Route::get('/profile', [UserController::class, 'index'])->name('UserIndex');
Route::get('/album', [AlbumController::class, 'index'])->name('UserIndex');

Route::get('/user', [UserController::class, 'index2'])->name('UserIndex');
Route::resource('/product', ProductController::class);
Route::get('/tambahuser', [UserController::class, 'tambah']);
Route::post('/kirimuser', [UserController::class, 'add']);
Route::get('/user/detail/{id}', [UserController::class, 'detail']);
Route::get('/user/edit/{id}', [UserController::class, 'detailedit']);
Route::post('/edituser/{id}', [UserController::class, 'edit']);
Route::get('delete/{id}', [UserController::class, 'delete']);

Route::get('/tambahalbum', [AlbumController::class, 'tambah']);
Route::post('/kirimalbum', [AlbumController::class, 'add']);



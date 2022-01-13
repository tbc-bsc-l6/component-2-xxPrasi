<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;

use App\Http\Controllers\BooksController;
use App\Http\Controllers\CDsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginControllers;

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

//Route::resource('books', BooksController::class);
//Route::resource('cds', CDsController::class);


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::view('/admin/home', 'adminHome');
    Route::resource('/admin/books', BooksController::class);
    Route::resource('/admin/cds', CDsController::class);
});

Route::middleware(['auth', 'is_user'])->group(function () {
    Route::view('/home', 'home');
    Route::get('/user/books',[BooksController::class, 'userIndex'])->name('userBooks');
    Route::get('/user/cds',[CDsController::class, 'userIndex'])->name('userCds');
});

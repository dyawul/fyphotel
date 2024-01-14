<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// Route::get('/login', [LoginController::class, 'login'])
// ->name('login');    

Route::get('login', function () {
    return view('pages.login');
})->name('login');  

Route::get('success', function () {
    return view('pages.success_checkout');
})->name('success');  

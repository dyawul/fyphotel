<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Models\User;
use App\Events\NewReservationEvent;
use App\Events\RefreshDashboardEvent;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TransactionRoomReservationController;
use App\Http\Controllers\RoomStatusController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TypeController;

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


Route::get('/', [HomeController::class, 'index'] 
)->name('home');

Route::get('success', function () {
    return view('pages.success_checkout');
})->name('success');

Route::get('choose-room', function () {
    return view('checkout.choose_room');
})->name('choose-room');

// Route::get('choose-room', [CheckoutController::class, 'chooseRoom'])->name('choose-room');

// socialite routes
Route::get('sign-in-google', [UserController::class, 'google']
)->name('user.login.google');

Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');


Route::resource('customer', CustomerController::class);
Route::resource('type', TypeController::class);
Route::resource('room', RoomController::class);
Route::resource('roomstatus', RoomStatusController::class);
Route::resource('transaction', TransactionController::class);
Route::resource('facility', FacilityController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

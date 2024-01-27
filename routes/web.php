<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\http\Controllers\CheckoutRoomReservationController;

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



// Route::get('choose-room', function () {
//     return view('checkout.choose_room');
// })->name('choose-room');

Route::middleware(['auth'])->group(function () {

Route::get('checkout/success', function () {
    return view('pages.success_checkout');
})->name('success');

Route::get('choose-room', [CheckoutRoomReservationController::class, 'chooseRoom']
)->name('choose-room');

Route::get('/{room}/{from}/{to}/confirmation', [CheckoutRoomReservationController::class, 'confirmation']
)->name('confirmation');

Route::post('checkout/{room}', [CheckoutRoomReservationController::class, 'store'])->name('checkout.store');
});

// Route::get('{user}/choose-room', [CheckoutRoomReservationController::class, 'chooseRoom']
// )->name('choose-room');

// socialite routes
Route::get('sign-in-google', [UserController::class, 'google']
)->name('user.login.google');

Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

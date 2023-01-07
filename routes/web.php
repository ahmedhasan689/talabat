<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
//Route::get('/user', [HomeController::class, 'index'])->name('home');

Route::get('/user', function () {
    return view('users.index');
})->name('user.index');


Route::get('/orders', function () {
    return view('orders.index');
})->name('order.index');

Route::get('/offers', function () {
    return view('offers.index');
})->name('offer.index');

Route::get('/', function () {
    return view('home');
})->name('home.index');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Route::middleware(['auth'])->group(function() {
//    // Start Home Page
//    Route::get('/', [HomeController::class, 'index'])->name('home');
//    // End Home Page
//
//
//});

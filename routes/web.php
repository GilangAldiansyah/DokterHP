<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('about');
});

Route::get('/loginPage', [LoginController::class, 'index']);
Route::post('/log_in', [LoginController::class, 'authenticate']);

Route::post('/register', [LoginController::class, 'store']);

Route::get('dash_board', [DashboardController::class, 'index']);

Route::resource('/handphone', \App\Http\Controllers\HandphoneController::class);

Route::resource('/pelanggan', \App\Http\Controllers\PelangganController::class);

// Route::get('/log_in', function () {
//     return view('login.index');
// });
<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HandphoneController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\SparepartController;

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
Route::post('/loginPage', [LoginController::class, 'authenticate']);

Route::post('/register', [LoginController::class, 'store']);

Route::get('dash_board', [DashboardController::class, 'index']);

Route::resource('/handphone', \App\Http\Controllers\HandphoneController::class);
Route::resource('/sparepart', \App\Http\Controllers\SparepartController::class);
Route::resource('/pelanggan', \App\Http\Controllers\PelangganController::class);
Route::resource('/handphonepelanggan', \App\Http\Controllers\HandphonePelangganController::class);
Route::resource('/statusperbaikan', \App\Http\Controllers\StatusPerbaikanController::class);
Route::resource('/datapelanggan', \App\Http\Controllers\DataPelangganController::class);

//Route::get('/handphonepelanggan', [\App\Http\Controllers\HandphoneController::class, 'index']);
Route::get('admin-page',[App\Http\Controllers\DashboardController::class, 'indexAdmin'])->middleware('role:admin')->name('admin.page');

Route::get('user-page', [App\Http\Controllers\DashboardController::class, 'indexUser'])->middleware('role:user')->name('user.page');

Route::get('assign-role-to-user', function(){
    $user = User::findOrFail(6);
    $role = Role::findOrFail(2);

    $user->assignRole($role);
});


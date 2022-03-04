<?php

use App\Http\Controllers\PerjalananController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('auth.login');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', fn() => redirect()->route('login'));

Route::group(['middleware' => ['auth', 'checkRole:admin']], function(){
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Route::get('/perjalanan/data', [PerjalananController::class, 'data'])->name('perjalanan.data');

    Route::get('/user/data', [UserController::class, 'data'])->name('user.data');
    Route::resource('user', UserController::class)->except('update');
    Route::post('/user/{id}/update', [UserController::class, 'update'])->name('user.update');

    Route::get('/perjalanan/data', [PerjalananController::class, 'data'])->name('perjalanan.data');
    Route::resource('perjalanan', PerjalananController::class);
    Route::post('/perjalanan/{id}/update', [PerjalananController::class, 'update'])->name('perjalanan.update');
});

Route::group(['middleware' => ['auth', 'checkRole:admin,user']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
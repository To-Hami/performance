<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('home');

//    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
//    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

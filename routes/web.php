<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListDetailsController;


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

Route::get('/', [ListDetailsController::class, 'login']);

Route::post('/login-submit', [ListDetailsController::class, 'loginSubmit'])->name('login-submit');

Route::get('/list-orders', [ListDetailsController::class, 'listDetails']);

Route::post('/logout', [ListDetailsController::class, 'logout'])->name('logout');

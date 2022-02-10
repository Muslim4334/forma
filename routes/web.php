<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ShowProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsabController;
use App\Http\Controllers\kursdoshlarController;

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



Route::get('/', [MainController::class, 'show']);

Route::get('/biz',[MainController::class, 'biz']);

Route::resource('kursdosh', kursdoshlarController::class);


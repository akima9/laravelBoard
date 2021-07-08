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

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('board/list');
});

Route::get('register', [UserController::class, 'create']);

Route::get('login', [UserController::class, 'login']);

Route::get('mypage', [UserController::class, 'mypage']);

Route::post('users', [UserController::class, 'store']);
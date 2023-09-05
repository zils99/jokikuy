<?php

use App\Http\Controllers\ControllerUser;
use Illuminate\Support\Facades\Route;


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
    return view('landing');
});

Route::get('/login', [ControllerUser::class, 'index']);
Route::get('/register', [ControllerUser::class, 'Register']);
Route::get('/homepengguna', [ControllerUser::class, 'homepengguna']);
Route::get('/logout', [ControllerUser::class, 'logout']);
Route::get('/profilepengguna', [ControllerUser::class, 'profilepengguna']);
Route::get('/carigame', [ControllerUser::class, 'carigame']);
Route::get('detailgame/{id}', [ControllerUser::class, 'detailgame']);
Route::post('/login', [ControllerUser::class, 'login']);
Route::post('/register', [ControllerUser::class, 'TambahUser']);
Route::post('/editprofilepengguna', [ControllerUser::class, 'editprofile']);

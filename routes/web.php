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

Route::get('/login', [ControllerUser::class, 'Login']);
Route::get('/register', [ControllerUser::class, 'Register']);
Route::post('/register', [ControllerUser::class, 'TambahUser']);


Route::get('/homepengguna', function () {
    return view('pengguna/homepengguna');
});

Route::get('/carigame', function () {
    return view('pengguna/carigame');
});

Route::get('/profilepengguna', function () {
    return view('pengguna/profilepengguna');
});

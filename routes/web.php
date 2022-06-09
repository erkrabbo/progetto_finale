<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome', [
        'auth_user' => Auth::user()
    ]);
});
Auth::routes();
Route::middleware('auth')->resource('houses', 'HouseController');

// Route::get('/', function () {
//     return view('guests.home');
// })->name('homepage');

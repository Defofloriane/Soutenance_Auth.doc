<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
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
    return view('welcome');
});
Route::get('/login', [home::class, 'login'])->name('login');
Route::get('/forgot_password', [home::class, 'forgot_password'])->name('forgot_password');
Route::get('/signup', [home::class, 'signup'])->name('signup');
Route::get('/about', [home::class, 'about'])->name('about');
Route::get('/index', [home::class, 'index'])->name('index');

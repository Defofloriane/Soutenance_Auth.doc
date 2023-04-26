<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\UserController;
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
Route::get('/auth_doc', [home::class, 'auth_doc'])->name('auth_doc');
Route::post('/customRegistration', [home::class, 'customRegistration'])->name('customRegistration');
Route::post('/customLogin', [home::class, 'customLogin'])->name('customLogin');
Route::get('/signOut', [home::class, 'signOut'])->name('signOut');

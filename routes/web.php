<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReleveController;

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

Route::controller(home::class)->group(function () {
    Route::get('webcam', 'index')->name('webcam.capture');
    Route::post('webcam', 'store');
});
Route::get('/ocr', [home::class,'ocr'])->name('ocr');
Route::post('/upload', [home::class,'upload'])->name('upload');
// Route::get('/details', [home::class,'details'])->name('details');
Route::get('/details', [ReleveController::class,'reveleEtudiant'])->name('details');
Route::get('/view_etudiant', [ReleveController::class,'view_etudiant'])->name('view_etudiant');
Route::post('/search', [ReleveController::class,'search'])->name('search');
Route::get('/hachage', [UserController::class, 'hachage']);
Route::post('/show', [ReleveController::class, 'show'])->name('show');
// Route::get('/details/{id}', 'ReleveController@show')->name('details.show');


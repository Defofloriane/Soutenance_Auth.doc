<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ArchiveController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReleveController;
use App\Http\Controllers\AttestationController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\FaculteController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\ScanQrController;
use App\Http\Controllers\GeneratePDFController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\PythonController;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
Route::post('webcam',[ScanQrController::class,'store'])->name('store');
Route::get('/ocr', [home::class,'ocr'])->name('ocr');
Route::post('/upload', [home::class,'upload'])->name('upload');
Route::get('/details', [home::class,'details'])->name('details');
Route::get('/details', [ReleveController::class,'reveleEtudiant'])->name('details');
// Route::get('/details', [ReleveController::class,'add_releve'])->name('details');
Route::get('/view_etudiant', [ReleveController::class,'view_etudiant'])->name('view_etudiant');
Route::get('/view_admin', [home::class,'view_admin'])->name('view_admin');
Route::put('/admin/{id}', [home::class, 'admin_update'])->name('admin_update');
Route::delete('/admin_delete/{id}', [home::class,'admin_delete'])->name('admin_delete');


Route::post('/search', [ReleveController::class,'search'])->name('search');

Route::post('/add_releve', [ReleveController::class,'add_releve'])->name('add_releve');
Route::get('/view_add_releve', [ReleveController::class,'view_add_releve'])->name('view_add_releve');
Route::post('/get_ue_credit', [ReleveController::class,'get_ue_credit'])->name('get_ue_credit');
Route::get('/hachage', [UserController::class, 'hachage']);
Route::post('/show', [ReleveController::class, 'show'])->name('show');
Route::post('/showAttestation', [AttestationController::class, 'showAttestation'])->name('showAttestation');
Route::get('/attestation', [AttestationController::class, 'attestation'])->name('attestation');
Route::get('/details_releve',[ReleveController::class, 'details_releve'])->name('details_releve');
Route::post('/import_excel',[ReleveController::class, 'import_excel'])->name('import_excel');
Route::get('/scan_code',[ScanQrController::class,'index'])->name('index');
Route::post('/store',[ScanQrController::class,'store'])->name('store');
Route::post('/test',[ScanQrController::class,'test'])->name('test');
// Route::get('/details/{id}', 'ReleveController@show')->name('details.show');
// Route::post('/import-excel', 'ExcelController@import')->name('import.excel');
Route::get('/telechargerPDF', [GeneratePDFController::class, 'telechargerPDF'])->name('telechargerPDF');
Route::get('/faculte',[FaculteController::class,'index'])->name('faculte');
Route::post('/departement',[DepartementController::class,'index'])->name('departement');
Route::post('/filiere',[FiliereController::class,'index'])->name('filiere');
Route::post('/niveau',[NiveauController::class,'index'])->name('niveau');
Route::post('/etudiant',[EtudiantController::class,'index'])->name('etudiant');
Route::post('/getAttestation',[AttestationController::class,'getAttestation'])->name('getAttestation');
Route::get('/view_attestation', [AttestationController::class,'view_attestation'])->name('view_attestation');
Route::get('/signature', [PythonController::class,'signature'])->name('signature');
Route::get('/archive',[ArchiveController::class,'index'])->name('archive');
Route::get('/archive/{path}', function ($path) {
    // Récupération de l'URL de la photo
    $photoUrl = Storage::url($path);

    // Affichage de la blade avec la photo
    return view('archive')->with('photoUrl', $photoUrl);
})->name('archive');



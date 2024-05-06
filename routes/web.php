<?php

use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\General;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CsvController;
use App\Http\Controllers\PdfController;
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

Route::get('/listeEtudiant',[EtudiantController::class,'liste_etudiant']);
Route::get('/ajouterEtudiant',[EtudiantController::class,'ajouter_etudiant']);
Route::post('/ajouter/traitement',[EtudiantController::class,'ajouter_traitement']);
Route::get('/updateEtudiant/{nom}',[EtudiantController::class,'updateEtudiant']);


Route::get('/listeG',[General::class,'liste'])->name('general.listeG');
Route::get('/listeC',[General::class,'listeComplexe'])->name('general.listeC');
Route::get('/formG',[General::class,'form'])->name('general.formG');
Route::get('/chartG',[General::class,'chart'])->name('general.chartG');
Route::get('/chartC',[General::class,'chartC'])->name('general.chartC');
Route::get('/dashboard',[General::class,'dashboard'])->name('general.dashboard')->middleware('auth');

Route::get('/',[LoginController::class,'login'])->name('general.login');
Route::post('/login',[LoginController::class,'authLogin'])->name('login');
Route::get('/register',[LoginController::class,'register'])->name('general.register');
Route::post('/insertUser',[LoginController::class,'insert_user'])->name('general.insertuser');


Route::get('/Rcsv',[CsvController::class,'redirect_csv'])->name('general.Rcsv');
Route::post('/traitementcsv',[CsvController::class,'traitement_csv'])->name('general.traitementCsv');


Route::get('/traitementpdf',[PdfController::class,'traitement_pdf'])->name('general.traitementPdf');
Route::get('/traitementCsv',[CsvController::class,'export_csv'])->name('general.traitementCsv');

Route::get('/redirectUpload',[UploadController::class,'redirect_upload'])->name('general.upload');
Route::post('/traitementUpload',[UploadController::class,'traitement_upload'])->name('general.traitementUpload');

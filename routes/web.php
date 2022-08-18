<?php

use App\Http\Controllers\DatomedicoController;
use App\Http\Controllers\FuaController;
use App\Http\Controllers\HistoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pacientesController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfesionalController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ConsultaNefrologica;
use App\Http\Controllers\ExamenesKTV;



Route::get('/', function () {
    return view('/mainNefrosur.principal');
});
Route::get('/init', function () {
    return view('/welcome');
});
Route::get('/recepcion/pdf', [App\Http\Controllers\FuaController::class, 'createPDF'])->name('fua.pdf');
Route::resource('pacientes',pacientesController::class);
Route::resource('profesionales',ProfesionalController::class);


Route::resource('recepcion',FuaController::class);
Route::resource('historia',HistoriaController::class);

Route::get('/recepcion/pdfunit/{id}', [FuaController::class, 'createUnitPDF'])->name('fuaExtra.pdf');

Route::get('/recepcion', [App\Http\Controllers\FuaController::class, 'index'])->name('recepcion.lisFua');
Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::resource('datomedico',DatomedicoController::class);
Route::resource('consultaCN',ConsultaNefrologica::class);
Route::resource('examenKTV',ExamenesKTV::class);
Route::get('/examenKTV/create/{id}' , [FuaController::class, 'create']);
Route::get('/datomedico/datomedicoBase', [DatomedicoController::class, 'mdatoBase'])->name('datomedicoBase');
<?php

use App\Http\Controllers\FuaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pacientesController;
use App\Http\Controllers\PDFController;

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
    return view('/mainNefrosur.principal');
});
//Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
/*Route::get('/main', function () {
    return view('main');
});

Route::get('/',function(){
    return view('principal');
});*/
Route::get('/recepcion/pdf', [App\Http\Controllers\FuaController::class, 'createPDF'])->name('fua.pdf');
Route::resource('pacientes',pacientesController::class);

//Route::get('/pacientes.pacientesForTurno','pacientesController@pacientesPorTurno');

Route::resource('recepcion',FuaController::class);


Route::get('/recepcion/lisFua', [App\Http\Controllers\FuaController::class, 'index'])->name('recepcion.lisFua');

Route::get('/recepcion', function () {
    return view('recepcion');
});

/*Route::get('/recepcion/crearFua/pdf',function(){
    return view('recepcion.crearFua');
});*/


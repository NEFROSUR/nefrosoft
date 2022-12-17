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
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\IngresoAlmacenController;
use App\Http\Controllers\DetalleIngresoAlmacenController;
use App\Http\Controllers\DetalleSalidaAlmacenController;
use App\Http\Controllers\SalidaAlmacenController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\SalidaUnitaria;
use App\Http\Controllers\DevolucionAlmacenController;
use App\Http\Controllers\DetalleDevolucionAlmacenController;

//INICIO
Route::get('/', function () {
    return view('/mainNefrosur.principal');
});
Route::get('/init', function () {
    return view('/welcome');
});
//AREA RECEPCION
Route::get('/recepcion/pdf', [App\Http\Controllers\FuaController::class, 'createPDF'])->name('fua.pdf');
Route::resource('pacientes',pacientesController::class);
Route::resource('profesionales',ProfesionalController::class);
Route::resource('recepcion',FuaController::class);
Route::resource('historia',HistoriaController::class);
Route::get('/recepcion/pdfunit/{id}', [FuaController::class, 'createUnitPDF'])->name('fuaExtra.pdf');
Route::get('/recepcion', [App\Http\Controllers\FuaController::class, 'index'])->name('recepcion.lisFua');
//LOGIN Y REGISTRO
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
//ENFERMERIA
Route::resource('datomedico',DatomedicoController::class);
Route::resource('consultaCN',ConsultaNefrologica::class);
Route::resource('examenKTV',ExamenesKTV::class);
Route::get('/examenKTV/create/{id}' , [FuaController::class, 'create']);
Route::get('/datomedico/datomedicoBase', [DatomedicoController::class, 'mdatoBase'])->name('datomedicoBase');

//ALMACEN
Route::resource('proveedores',ProveedorController::class);
Route::resource('producto',ProductoController::class);
Route::resource('ingresoAlmacen',IngresoAlmacenController::class);
//INGRESOS
Route::get('/detalleIngresoAlmacen/create/{id}',[DetalleIngresoAlmacenController::class, 'createMedica'])->name('detalleIngresoAlmacen.createMedica');
Route::resource('detalleIngresoAlmacen',DetalleIngresoAlmacenController::class);
Route::get('/detalleIngresoAlmacen/show/{id}',[DetalleIngresoAlmacenController::class, 'showN'])->name('detalleSalidaAlmacen.showN');
Route::get('/detalleIngresoAlmacen/refresh/{id}',[DetalleIngresoAlmacenController::class, 'refresh'])->name('detalleSalidaAlmacen.refresh');
//ALMACEN
Route::resource('almacen',InventarioController::class);
//SALIDAS
Route::get('/detalleSalidaAlmacen/create/{id}',[DetalleSalidaAlmacenController::class, 'createSalida'])->name('detalleSalidaAlmacen.createSalida');
Route::get('/detalleSalidaAlmacen/show/{id}',[DetalleSalidaAlmacenController::class, 'showN'])->name('detalleSalidaAlmacen.showN');
Route::get('/detalleSalidaAlmacen/refresh/{id}',[DetalleSalidaAlmacenController::class, 'refresh'])->name('detalleSalidaAlmacen.refresh');

Route::resource('salidaAlmacen',SalidaAlmacenController::class);
Route::resource('detalleSalidaAlmacen',DetalleSalidaAlmacenController::class);


Route::get('/salidaUnitaria/create/{id}',[SalidaUnitaria::class, 'create'])->name('salidaUnitaria.crearSalidaUnitaria');
Route::resource('salidaUnitaria',SalidaUnitaria::class);
//DEVOLUCIONES AL ALMACEN

Route::resource('devoluciones',DevolucionAlmacenController::class);
Route::resource('detalleDevoluciones',DetalleDevolucionAlmacenController::class);
Route::get('/devoluciones/refresh/',[DevolucionAlmacenController::class, 'refresh'])->name('devoluciones.refresh');
Route::get('/detalleDevoluciones/show/{id}',[DetalleDevolucionAlmacenController::class, 'showD'])->name('detalleDevoluciones.showD');
Route::get('/detalleDevoluciones/refresh/{id}',[DetalleDevolucionAlmacenController::class, 'refresh'])->name('detalleDevoluciones.refresh');
//EXPORTS EN EXCEL
Route::get('/exportarProductos',[ExcelController::class, 'export']);
Route::get('/exportarFacturas',[ExcelController::class, 'exportFacturas']);
Route::get('/exportarSalidas',[ExcelController::class, 'exportSalidas']);
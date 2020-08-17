<?php

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
    return view('index');
});

Route::resource('/empresas', 'EmpresasController');
Route::resource('/personas', 'PersonasController');
Route::resource('/provincias', 'ProvinciasController');
Route::resource('/roles', 'RolesController');
Route::resource('/servicios', 'ServiciosController');
Route::resource('/tiposEnvios', 'TiposEnviosController');
Route::resource('/tiposRecibos', 'TiposRecibosController');
Route::resource('/localidades', 'LocalidadesController');
Route::resource('/domicilios', 'DomiciliosController');
Route::resource('/paquetes', 'PaquetesController');
Route::resource('/recibos', 'RecibosController');
Route::resource('/reportes', 'ReportesController');
Route::resource('/reporte1', 'Reporte1Controller');
Route::resource('/reporte2', 'Reporte2Controller');
Route::resource('/reporte3', 'Reporte3Controller');
Route::resource('/reporte4', 'Reporte4Controller');
Route::resource('/reporte5', 'Reporte5Controller');
Route::resource('/reporte6', 'Reporte6Controller');

// Route::get('/reporte1', 'Reporte1Controller@index');

// Route::get('/empresas/eliminados', 'EmpresasController')->name('empresas.eliminados');

// Route::resource('/empresas/{id}', 'EmpresasController');

// Route::delete('/empresas/{id}', 'EmpresasController');

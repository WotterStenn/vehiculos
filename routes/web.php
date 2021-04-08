<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\SalidaController;


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

// Route::get('/', function () {

//     $name='Wotter';

//     return view('welcome', ['name' => $name]);
// });

Route::get('/vehiculos', 'VehiculosController@index')->name('vehiculos');

Route::post('vehiculos', [VehiculosController::class, 'store'])->name('vehiculos.store');

Route::get('/salida', 'SalidaController@index');

Route::put('salida/{id}', [SalidaController::class, 'update'])->name('salida.update');

Route::get('/reporte', 'ReporteController@index');

Route::get('/pdf', 'PdfController@PDF')->name('descargarPDF');
    // $pdf = resolve('dompdf.wrapper');

    // $pdf->loadView('reporte');
    // return $pdf->stream();



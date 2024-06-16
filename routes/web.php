<?php

use Illuminate\Support\Facades\Route;

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
//Vista Home
Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Vista Comedor
Route::get('/comedor', function () {
    return view('comedor.index');
});

Route::get('/comedor/1', function () {
    return view('comedor.comedor1');
});

//Vista Dormitorio
Route::get('/dormitorio', function () {
    return view('dormitorio.index');
});
Route::get('/dormitorio/1', function () {
    return view('dormitorio.dormitorio1');
});
Route::get('/dormitorio/2', function () {
    return view('dormitorio.dormitorio2');
});
Route::get('/dormitorio/3', function () {
    return view('dormitorio.dormitorio3');
});
Route::get('/dormitorio/4', function () {
    return view('dormitorio.dormitorio4');
});

//Vista Cocina
Route::get('/cocina', function () {
    return view('cocina.index');
});
Route::get('/cocina/1', function () {
    return view('cocina.cocina1');
});
Route::get('/cocina/2', function () {
    return view('cocina.cocina2');
});

//Vista Cotizacion y accesorios
Route::get('/cotizacion-accesorios', function () {
    return view('cotizacion.index');
});

//Vista Envio
Route::get('/envio', function () {
    return view('envio.index');
});

//Vista Cotizacion y accesorios
Route::get('/nosotros', function () {
    return view('nosotros.index');
});

//Vista Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

//Vista Repuesto
Route::get('/repuesto', function () {
    return view('repuesto.index');
});

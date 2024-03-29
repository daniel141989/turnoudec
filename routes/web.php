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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route Hooks - Do not delete//
	Route::view('boxes', 'livewire.boxes.index')->middleware('auth');
	Route::view('turnos', 'livewire.turnos.index')->middleware('auth');
	Route::view('especialidads', 'livewire.especialidads.index')->middleware('auth');
	Route::view('empleados', 'livewire.empleados.index')->middleware('auth');
	Route::view('estudiantes', 'livewire.estudiantes.index')->middleware('auth');
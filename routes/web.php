<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DocenteController;
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

// ruta para mostrar la pagina principal del proyecto
Route::get('/',[HomeController::class,'index'])->name('index');

//ruta para mostrar la pagina de docentes
Route::get('docentes',[DocenteController::class,'index'])->name('index');

//ruta para eliminar un registro
Route::delete('docentes/{id}',[DocenteController::class,'destroy'])->name('docentes.destroy');

//ruta para agregar un registro
Route::post('docentes', [DocenteController::class, 'store'])->name('docentes.store');

//ruta para cargar los datos en el formulario
Route::get('docente/editar/{id}', [DocenteController::class, 'edit']) -> name('docente.edit');

//ruta para actualizar un docente
Route::get('docente/guardar/{id}', [DocenteController::class, 'update']) -> name('docente.update');

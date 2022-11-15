<?php

use App\Http\Controllers\EjemploController;
use App\Models\Ejemplo;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;

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
  return view('welcome');
  //return "El usuario  con el ID: ".$id ." Nombre: ".$nombre;
  //return view('plantilla');
});

//Route::get('/ejemplo', 'EjemploController@index'); //Obsoleto
//Route::get('/ejemplo/{id}',[EjemploController::class, 'index']); //Actual
Route::resource('ejemplo', EjemploController::class); //Opcion 1
//Route::resource('ejemplo', App\Http\Controllers\EjemploController::class); //Opcion 2

//Route::resource('contacto', EjemploController::class); //Opcion 1
//Route::get('/contacto/{id}/{titulo}/{categoria}', [EjemploController::class, 'show']);

Route::get('/leer', function () {
  $ejemplos = Ejemplo::where('id', 2)->take(1)->get();

  return $ejemplos;

  /*
  $ejemplos = Ejemplo::all();
  foreach($ejemplos as $ejemplo){
  return $ejemplo->titulo;
  }
  */
});

Route::get('/insertar', function () {
  $insertar = new Ejemplo;

  $insertar->titulo = 'Nuevo Titulo';
  $insertar->prueba = 'Nueva Prueba';
  $insertar->categoria = 'Nueva Categoria';

  $insertar->save();
});

Route::get('/crear', function () {
  Ejemplo::create(['titulo' => 'Noticia', 'prueba' => 'Prueba Noticia', 'categoria' => 'Prueba Categoria']);
});

Route::get('/actualizar', function () {
  Ejemplo::where('id', 3)->update(['titulo' => 'Titulo Actualizado']);
});

Route::get('/eliminar', function () {
  $eliminar = Ejemplo::find(2);

  $eliminar->delete();
});

Route::get('/eliminar2', function () {
  Ejemplo::destroy(4);
});

Route::get('/eliminar3', function () {
  Ejemplo::destroy(3, 6);
});

Route::get('/papelera', function () {
  Ejemplo::find(5)->delete();
});

Route::get('/leer_papelera', function () {
  $leer = Ejemplo::withTrashed()->where('id', 5)->get();

  return $leer;
});
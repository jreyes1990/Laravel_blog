<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //Importacion clase de BD

class EjemploController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modulos.form');

        //return view('modulos.contacto');
        //Inserta los datos a la base de datos
        //DB::insert('insert into ejemplo (categoria, titulo, prueba) values(?, ?, ?);',['ninguno', 'titulo 1', 'prueba 1']);

        //Leer los datos de la base de datos
        /*$leer = DB::select('select * from ejemplo where id=?', [1]);
        return $leer;*/

        //Actualizar el dato de la base de datos
        /*$actualizar = DB::update('update ejemplo set titulo="Nuevo Titulo" where id=?', [1]);
        return $actualizar;*/

        //Elimina el datp de la base de datos
        /*$eliminar = DB::delete('delete from ejemplo where id=?', [1]);
        return $eliminar;*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return "Estoy aprendiendo Laravel";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $titulo, $categoria)
    {
        //return view('modulos.contacto')->with('id', $id); //Opcion 1
        //return view('modulos.contacto', compact('id', 'titulo', 'categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

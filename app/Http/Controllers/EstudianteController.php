<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\EstudianteFormRequest;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiante=Estudiante::orderBy('id','DESC')->paginate(3);
        return view('estudiante.index',compact('estudiante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstudianteFormRequest $request)
    {
        $estudiante=new Estudiante;
        $estudiante->id_acudiente=1;
        $estudiante->id_curso=1;
        $estudiante->tipo_documento=$request->get('tipo_documento');
        $estudiante->identificacion=$request->get('identificacion');
        $estudiante->nombres=$request->get('nombres');
        $estudiante->primer_apellido=$request->get('primer_apellido');
        $estudiante->segundo_apellido=$request->get('segundo_apellido');
        $estudiante->genero=$request->get('genero');
        $estudiante->fecha_nacimiento=$request->get('fecha_nacimiento');
        $estudiante->edad=$request->get('edad');
        $estudiante->nombre_padre=$request->get('nombre_padre');
        $estudiante->nombre_madre=$request->get('nombre_madre');
        $estudiante->rol='Estudiante';

        $estudiante->save();
        return Redirect::to('estudiante');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante=Estudiante::FindOrFail($id);
        return view ("estudiante.edit",["estudiante"=>$estudiante]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EstudianteFormRequest $request, $id)
    {
        $estudiante=Estudiante::FindOrFail($id);
        $estudiante->tipo_documento=$request->get('tipo_documento');
        $estudiante->identificacion=$request->get('identificacion');
        $estudiante->nombres=$request->get('nombres');
        $estudiante->primer_apellido=$request->get('primer_apellido');
        $estudiante->segundo_apellido=$request->get('segundo_apellido');
        $estudiante->genero=$request->get('genero');
        $estudiante->fecha_nacimiento=$request->get('fecha_nacimiento');
        $estudiante->edad=$request->get('edad');
        $estudiante->nombre_padre=$request->get('nombre_padre');
        $estudiante->nombre_madre=$request->get('nombre_madre');

        $estudiante->update();
        return Redirect::to('estudiante');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante=Estudiante::FindOrFail($id);
        $estudiante->delete();
        return Redirect::to('estudiante');
    }

    
}
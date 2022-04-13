@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Estudiante</h3> @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul> @foreach ($errors->all() as $error) <li>{{$error}}</li> @endforeach </ul>
        </div> @endif
    </div>

</div>

{{Form::open(array('action'=>array('App\http\Controllers\EstudianteController@update', $estudiante->id),'method'=>'patch'))}}

<div class="row">
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group"> <label for="tipo_documento">Tipo de documento</label> 
            <select name="tipo_documento" id="tipo_documento" class="form-control">
            <option value="RC">RC</option>
            <option value="PA">PA</option>
            </select>
        </div>
        <div class="form-group"> <label for="primer_apellido">Primer Apellido</label> <input type="text" name="primer_apellido"
                id="primer_apellido" class="form-control" value="{{$estudiante->primer_apellido}}"> </div>

         <div class="form-group"> <label for="fecha_nacimiento">Fecha nacimientoo</label> <input type="date" name="fecha_nacimiento"
                id="fecha_nacimiento" class="form-control" value="{{$estudiante->fecha_nacimiento}}"> </div>
        
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group"> <label for="identificacion">Numero Documento</label> <input type="number"
                name="identificacion" id="identificacion" class="form-control"
                value="{{$estudiante->identificacion}}"> </div>
        
        <div class="form-group"> <label for="segundo_apellido">Segundo Apellido</label> <input type="text" name="segundo_apellido"
            id="segundo_apellido" class="form-control" value="{{$estudiante->segundo_apellido}}"> </div>
        
            <div class="form-group"> <label for="edad">Edad</label> <input type="number"
                name="edad" id="edad" class="form-control"
                value="{{$estudiante->edad}}"> </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        
            <div class="form-group"> <label for="nombres">Nombres</label>
            <input type="text" name="nombres" id="nombres" class="form-control" value="{{$estudiante->nombres}}">
        </div>

        <div class="form-group"> <label for="genero">Genero</label>
            <select name="genero" id="genero" class="form-control">
            <option value="M">M</option>
            <option value="F">F</option>
            </select>
        </div>

        <div class="form-group"> <label for="nombre_padre">Nombre del padre</label>
            <input type="text" name="nombre_padre" id="nombre_padre" class="form-control" value="{{$estudiante->nombre_padre}}">
        </div>
    </div>
    
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group"> <label for="nombre_madre">Nombre de la madre</label> <input type="text" name="nombre_madre" id="nombre_madre"
                class="form-control" value="{{$estudiante->nombre_madre}}"> </div>
    </div>
   
    </div>
    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
        <div class="form-group"> <br> <button class="btn btn-primary" type="submit"><span
                    class="glyphicon glyphicon-ok"></span> Guardar</button> <button class="btn btn-danger"
                type="reset"><span class="glyphicon glyphicon-remove"></span> Vaciar Campos</button> <a
                class="btn btn-info" type="reset" href="{{url('estudiante')}}"><span
                    class="glyphicon glyphicon-home"></span> Regresar </a> </div>
    </div>
</div> {!!Form::close()!!} @endsection
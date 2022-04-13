@extends('layout.plantilla')

@section('contenido')
<div class="row">
    <div class="col-md-9">
        <a href="{{url('estudiante/create')}}" class="pull-right">
            <button class="btn btn-success">Crear Estudiante</button> </a> </div>
            <a href="{{url('imprimirEstudiantes')}}" class="pull-right"> <button class="btn btn-success">Imprimir Pdf</button> </a>
</div>
<div class="row">
    <div class="col-md-18 col-xs-18">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <th>Tipo documento</th>
                    <th>Identificacion</th>
                    <th>Nombres</th>
                    <th>Primer apellido</th>
                    <th>Segundo apellido</th>
                    <th>Genero</th>
                    <th>Fecha nacimiento</th>
                    <th>Edad</th>
                    <th>Nombre del padre</th>
                    <th>Nombre de la madre</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach($estudiante as $est)
                    <tr>
                        <td>{{ $est->tipo_documento }}</td>
                        <td>{{ $est->identificacion }}</td>
                        <td>{{ $est->nombres }}</td>
                        <td>{{ $est->primer_apellido }}</td>
                        <td>{{ $est->segundo_apellido }}</td>
                        <td>{{ $est->genero }}</td>
                        <td>{{ $est->fecha_nacimiento }}</td>
                        <td>{{ $est->edad}}</td>
                        <td>{{ $est->nombre_padre }}</td>
                        <td>{{ $est->nombre_madre }}</td>
                        <td> 
                        <a href="{{URL::action('App\http\Controllers\EstudianteController@edit',$est->id)}}"><button class="btn btn-primary">Actualizar</button></a>
                            <a href="" data-target="#modal-delete-{{$est->id}}" data-toggle="modal"> <button class="btn btn-danger">Eliminar</button></a> 
                        </td>
                    </tr> 
                    @include('estudiante.modal')
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
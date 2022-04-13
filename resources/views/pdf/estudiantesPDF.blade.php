<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>
    <link rel="stylesheet" href="{{public_path('dist/css/adminlte.min.css')}}">
</head>

<body>
    <div>
        <div class="row">
            <div class="col"> <img src="{{public_path('img/logo.jpg')}}" alt="" width='60px'> </div>
            <div class="col-md-12 col-xs-12">
                <h4 class="text-center">Institución Educativa Santa Fé</h4>
            </div>
            <div class="row">
                <h3 class="text-center">Reporte de Estudiantes</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12">
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
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>
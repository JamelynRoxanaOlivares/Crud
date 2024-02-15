<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            padding: 20px;
            background-color: #f4f4f4;
        }
        .table {
            width: 100%;
            margin-bottom: 1rem;
            background-color: #fff;
            border-radius: .25rem;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }
        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
            background-color: #f8f9fa;
            color: #333;
        }
        .table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
</head>
<body>
    <a href="{{url('empleado/create')}}" class="btn btn-primary mb-3">Registrar nuevo empleado</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Fotografía</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Rango</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Zona de Trabajo</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
            <tr>
                <td>{{$empleado -> id}}</td>
                <td>
                    <img src="{{asset('storage').'/'.$empleado->Foto}}" width="100" alt="Fotografía de {{$empleado->Nombre}}">
                </td>
                <td>{{$empleado -> Nombre}}</td>
                <td>{{$empleado -> Apellido}}</td>
                <td>{{$empleado -> Edad}}</td>
                <td>{{$empleado -> Rango}}</td>
                <td>{{$empleado -> Telefono}}</td>
                <td>{{$empleado -> Correo}}</td>
                <td>{{$empleado -> Zona_trabajo}}</td>
                <td>
                    <a href="{{url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{url('/empleado/'.$empleado->id)}}" method="post" style="display: inline-block;">
                        @csrf
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Quieres borrar?')">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

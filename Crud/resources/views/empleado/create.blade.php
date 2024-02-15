<a href="{{ url('empleado') }}" class="btn btn-primary mb-3" style="text-decoration: none; color: white; padding: 10px 20px; border-radius: 5px; background-color: #007bff; border-color: #007bff; display: inline-block;">Mostrar registros</a>

<form action="{{url('/empleado')}} " method="post" enctype="multipart/form-data">
@csrf

<h1>    Registrar personal   </h1>



@include('empleado.form');





</form>
<style>
        body {
            padding: 20px;
            background-color: #f4f4f4;
        }
        
    </style>
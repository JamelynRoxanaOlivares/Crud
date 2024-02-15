formulario q tendra datos en comun con create y edit 

<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}" id="Nombre" >
<br>
<label for="Apellido">Apellido</label>
<input type="text"name="Apellido" value="{{isset($empleado->Apellido)?$empleado->Apellido:''}}" id="Apellido" >
<br>
<label for="Foto">Foto</label>
@if(isset($empleado-> Foto))
<img src="{{asset('storage').'/'.$empleado-> Foto}}" width="100" alt="">
@endif
<input type="file" name="Foto" value="" id="Foto">
<br>
<label for="Edad">Edad</label>
<input type="text" name="Edad" value="{{isset($empleado->Edad)?$empleado->Edad:''}}" id="Edad" >
<br>
<label for="Rango">Rango</label>
<select name="Rango"  value="{{isset($empleado->Rango)?$empleado->Rango:''}}" id="Rango">
  <option value="Chofer">Chofer</option>
  <option value="Vandedor">Vandedor</option>
  <option value="Gerente">Gerente</option>
  <option value="Supervisor">Supervisor</option>
</select>
<br>
<label for="Telefono">Telefono</label>
<input type="text"name="Telefono" value="{{isset($empleado->Telefono)?$empleado->Telefono:''}}" id="Telefono">
<br>
<label for="Correo">Correo</label>
<input type="text"name="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:''}}" id="Correo">
<br>
<label for="Zona_Trabajo">Zona Laboral</label>
<input type="text"name="Zona_trabajo"  value="{{isset($empleado->Zona_trabajo)?$empleado->Zona_trabajo:''}}" id="Zona_trabajo" >
<br>



<input type="submit"value="Guardar datos"  >
<br>
<style>
    /* Estilos generales del formulario */
    form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f4f4f4;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        width: auto;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
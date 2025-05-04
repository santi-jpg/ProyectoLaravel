<h1>{{$modo}} empleado</h1>
<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="{{ isset($empleado) ? $empleado->Nombre : '' }}" id="Nombre">
<br>
<label for="ApellidoPaterno"> Apellido Paterno </label>
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno">
<br>
<label for="ApellidoMaterno"> Apellido Materno </label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno">
<br>
<label for="Correo"> Correo </label>
<input type="text" name="Correo" id="Correo">
<br>
<label for="Foto"> Foto </label>
@if(isset($empleado) && $empleado->Foto)
{{ $empleado->Foto }}
<img src="{{ asset('storage').'/'.$empleado->Foto }}" width="100">
@endif
<input type="file" name="Foto" id="Foto">
<br>
<input type="submit" value="{{$modo}} datos">

<a href="{{url('empleado')}}"> Regresar</a>

<br>
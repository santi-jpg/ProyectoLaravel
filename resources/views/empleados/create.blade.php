formulario de creacion de emleados

<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('empleados.form',['modo'=>'crear']);
</form>
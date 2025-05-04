<h1>MOSTRAR LA LISTA DE EMPLEADOS</h1>

@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif
<a href="{{ route('empleado.create') }}">Registrar nuevo</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Fotos</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
                <td>
                    <img src="{{ asset('storage/' . ($empleado->Foto ?? 'default.jpg')) }}" width="100" alt="Foto de {{ $empleado->Nombre }}">
                </td>
                <td>{{ $empleado->Nombre }}</td>
                <td>{{ $empleado->ApellidoPaterno }}</td>
                <td>{{ $empleado->ApellidoMaterno }}</td>
                <td>{{ $empleado->Correo }}</td>
                <td>
                    <a href="{{ route('empleado.edit', $empleado->id) }}">Editar</a>
                    |
                    <form action="{{ route('empleado.destroy', $empleado->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" onclick="return confirm('¿Quieres borrarlo?')" value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
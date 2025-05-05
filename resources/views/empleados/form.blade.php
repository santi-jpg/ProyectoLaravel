<head>
    @vite(['resources/index.blade.css', 'resources/css/index.blade.css'])
    @vite(['resources/index.blade.js', 'resources/js/index.blade.js'])
</head>
<h1>{{$modo}} empleado</h1>
<button type="button" id="regresarPagina" class="btn btn-primary" data-url="{{ url('empleado') }}">regresar</button>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registra el nuevo empleado') }}</div>

                <div class="card-body">

                    @csrf

                    <div class="row mb-3">
                        <label for="Nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                        <div class="col-md-6">
                            <input type="text" id="Nombre" name="Nombre" class="form-control @error('Nombre') is-invalid @enderror" value="{{ isset($empleado) ? $empleado->Nombre : '' }}">


                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="ApellidoPaterno" class="col-md-4 col-form-label text-md-end">{{ __('Apellido Paterno') }}</label>

                        <div class="col-md-6">
                            <input type="text" id="ApellidoPaterno" class="form-control @error('name') is-invalid @enderror" name="ApellidoPaterno" value="{{ isset($empleado) ? $empleado->ApellidoPaterno : '' }}">

                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="ApellidoMaterno" class="col-md-4 col-form-label text-md-end">{{ __('Apellido Materno') }}</label>

                        <div class="col-md-6">
                            <input type="text" id="ApellidoMaterno" class="form-control @error('name') is-invalid @enderror" name="ApellidoMaterno" value="{{ isset($empleado) ? $empleado->ApellidoMaterno : '' }}">

                        </div>
                    </div>




                    <div class="row mb-3">
                        <label for="Correo" class="col-md-4 col-form-label text-md-end">{{ __('Correo ') }}</label>

                        <div class="col-md-6">
                            <input id="Correo" name="Correo" type="text" class="form-control @error('email') is-invalid @enderror" required autocomplete="email" value="{{ isset($empleado) ? $empleado->Correo : '' }}">


                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Foto" class="col-md-4 col-form-label text-md-end">{{ __('Ingresa tu foto') }}</label>

                        <div class="col-md-6">
                            <input id="Foto" type="file" name="Foto" value="{{ isset($empleado) ? $empleado->Foto : '' }}">

                            @if(isset($empleado) && $empleado->Foto)
                            {{ $empleado->Foto }}
                            <img src="{{ asset('storage').'/'.$empleado->Foto }}" width="100">
                            @endif
                        </div>
                    </div>


                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{$modo}} datos
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <h1>{{$modo}} empleado</h1>
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

<button type="button" id="regresarPagina" class="btn btn-primary" data-url="{{ url('empleado') }}">regresar</button>


<br> -->
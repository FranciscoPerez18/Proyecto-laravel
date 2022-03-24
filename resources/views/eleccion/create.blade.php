@extends('plantilla')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Agregar Elecciones
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{ route('eleccion.store') }} " 
        enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                @csrf
                <label for="ubicacion">Periodo:</label>
                <input type="text" class="form-control" name="periodo" />
            </div>

            <div class="form-group">
                @csrf
                <label for="ubicacion">Fecha:</label>
                <input type="date" class="form-control" name="fecha" />
            </div>

            <div class="form-group">
                @csrf
                <label for="ubicacion">Fecha de apertura:</label>
                <input type="date" class="form-control" name="fechaapertura" />
            </div>

            <div class="form-group">
                @csrf
                <label for="ubicacion">Hora de apertura:</label>
                <input type="time" class="form-control" name="horaapertura" />
            </div>

            <div class="form-group">
                @csrf
                <label for="ubicacion">Fecha de cierre:</label>
                <input type="date" class="form-control" name="fechacierre" />
            </div>

            <div class="form-group">
                @csrf
                <label for="ubicacion">Hora de cierre:</label>
                <input type="time" class="form-control" name="horacierre" />
            </div>

            <div class="form-group">
                @csrf
                <label for="ubicacion">Observaciones:</label>
                <input type="text" class="form-control" name="observaciones" />
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection
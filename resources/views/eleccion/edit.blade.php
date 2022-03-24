@extends('plantilla')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Editar Eleccion
    </div>
    <div class="card-body">
        @if ($errors->any())<div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="POST" action="{{ route('eleccion.update', $eleccion->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group">
                @csrf
                <label for="id">ID:</label>
                <input type="text" class="form-control" readonly="true" value="{{$eleccion->id}}" name="id" />
            </div>

            <div class="form-group">
                @csrf
                <label for="descripcion">Periodo:</label>
                <input type="text" value="{{$eleccion->periodo}}" class="form-control" name="periodo" />
            </div>

            <div class="form-group">
                @csrf
                <label for="descripcion">Fecha:</label>
                <input type="date" value="{{$eleccion->fecha->format('Y-m-d')}}" class="form-control" name="fecha" />
            </div>

            <div class="form-group">
                @csrf
                <label for="descripcion">Fecha arpertura:</label>
                <input type="date" value="{{$eleccion->fechaapertura->format('Y-m-d')}}" class="form-control" name="fechaapertura" />
            </div>

            <div class="form-group">
                @csrf
                <label for="descripcion">Hora arpertura:</label>
                <input type="time" value="{{$eleccion->horaapertura->format('H:i')}}" class="form-control" name="horaapertura" />
            </div>

            <div class="form-group">
                @csrf
                <label for="descripcion">Fecha cierre:</label>
                <input type="date" value="{{$eleccion->fechacierre->format('Y-m-d')}}" class="form-control" name="fechacierre" />
            </div>

            <div class="form-group">
                @csrf
                <label for="descripcion">Hora cierre:</label>
                <input type="time" value="{{$eleccion->horacierre->format('H:i')}}" class="form-control" name="horacierre" />
            </div>

            <div class="form-group">
                @csrf
                <label for="descripcion">Observaciones:</label>
                <input type="text" value="{{$eleccion->observaciones}}" class="form-control" name="observaciones" />
            </div>

            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
    </div>
</div>
@endsection
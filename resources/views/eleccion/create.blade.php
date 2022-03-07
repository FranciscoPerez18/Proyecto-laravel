@extends('plantilla')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Agregar Eleccion
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
                <label for="periodo">Periodo:</label>
                <input type="text" id="periodo"
                 class="form-control" name="periodo" />
            </div>
            <div class="form-group">
                <label for="fecha">Periodo:</label>
                <input type="text" id="fecha"
                 class="form-control" name="fecha" />
            </div>
            

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ver Anotación</h1>
        <dl class="row">
            <dt class="col-sm-3">ID:</dt>
            <dd class="col-sm-9">{{ $anotacion->id }}</dd>

            <dt class="col-sm-3">Texto:</dt>
            <dd class="col-sm-9">{{ $anotacion->texto }}</dd>

            <dt class="col-sm-3">Tema:</dt>
            <dd class="col-sm-9">{{ $anotacion->tema->nombre }}</dd>

            <dt class="col-sm-3">Fecha de Creación:</dt>
            <dd class="col-sm-9">{{ $anotacion->created_at->format('d/m/Y H:i:s') }}</dd>

            <dt class="col-sm-3">Última Actualización:</dt>
            <dd class="col-sm-9">{{ $anotacion->updated_at->format('d/m/Y H:i:s') }}</dd>
        </dl>
        <a href="{{ route('anotaciones.edit', $anotacion->id) }}" class="btn btn-warning">Editar</a>
        <form action="{{ route('anotaciones.destroy', $anotacion->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
@endsection

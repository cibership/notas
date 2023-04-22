 {{-- @extends('layouts.app')  --}}
<html>

<h1>ffsfs<h1>
@section('content')
    <div class="container">
        <h1>Todas las Anotaciones</h1>
        <a href="{{ route('anotaciones.create') }}" class="btn btn-primary">Crear Nueva Anotación</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>itulo</th>
                    <th>contenido</th>
                    <th>Fecha de Creación</th>
                    <th>Última Actualización</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anotaciones as $anotacion)
                    <tr>
                        <td>{{ $anotacion->id }}</td>
                        <td>{{ $anotacion->titulo }}</td>
                        <td>{{ $anotacion->contenido }}</td>
                        <td>{{ $anotacion->created_at->format('d/m/Y H:i:s') }}</td>
                        <td>{{ $anotacion->updated_at->format('d/m/Y H:i:s') }}</td>
                        <td>
                            <a href="{{ route('anotaciones.show', $anotacion->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('anotaciones.edit', $anotacion->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('anotaciones.destroy', $anotacion->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
</html>
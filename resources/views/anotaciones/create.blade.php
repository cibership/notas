{{-- @extends('layouts.app') --}}

@section('content')
    <div class="container">
        <h1>Crear Nueva Anotación</h1>
        <form action="{{ route('anotaciones.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="texto">Texto:</label>
                <textarea name="texto" id="texto" class="form-control" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="tema_id">Tema:</label>
                <select name="tema_id" id="tema_id" class="form-control" required>
                    <option value="">Seleccione un Tema</option>
                    @foreach ($temas as $tema)
                        <option value="{{ $tema->id }}">{{ $tema->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection

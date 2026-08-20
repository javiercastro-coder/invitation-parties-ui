@extends('layouts.app')

@section('title', 'Nuevo lugar turístico - Viajando Ando')

@section('content')
    <section class="form-container">
        <h1>Nuevo lugar turístico</h1>

        @if ($errors->any())
            <p class="aviso error" role="alert">{{ $errors->first() }}</p>
        @endif

        <form action="{{ route('lugares.guardar') }}" method="POST">
            @csrf

            <section>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
            </section>

            <section>
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" rows="5" required>{{ old('descripcion') }}</textarea>
            </section>

            <section>
                <label for="ubicacion">Ubicación</label>
                <input type="text" id="ubicacion" name="ubicacion" value="{{ old('ubicacion') }}" required>
            </section>

            <section>
                <label for="stock">Cupos disponibles</label>
                <input type="number" id="stock" name="stock" value="{{ old('stock') }}" required>
            </section>

            <section>
                <label for="imagen">Nombre de imagen</label>
                <input
                    type="text"
                    id="imagen"
                    name="imagen"
                    value="{{ old('imagen') }}"
                    placeholder="salar-uyuni.jpg"
                >
                <small>La imagen debe existir dentro de public/img.</small>
            </section>

            <button type="submit">Guardar lugar</button>
        </form>

        <a href="{{ route('panel') }}">Regresar al panel</a>
    </section>
@endsection

@extends('layouts.app')

@section('title', 'Registrar libro')

@section('content')
    <section>
        <h1>Registrar libro</h1>

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="/libros/nuevo" method="POST">
            @csrf

            <section>
                <label for="titulo">Título del libro</label>
                <input
                    type="text"
                    id="titulo"
                    name="titulo"
                    value="{{ old('titulo') }}"
                >
            </section>

            <section>
                <label for="precio">Precio en Bs</label>
                <input
                    type="number"
                    id="precio"
                    name="precio"
                    value="{{ old('precio') }}"
                >
            </section>

            <button type="submit">Registrar libro</button>
        </form>

        <a href="/libros">Volver al catálogo</a>
    </section>
@endsection

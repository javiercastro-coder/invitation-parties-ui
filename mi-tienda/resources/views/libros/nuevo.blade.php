@extends('layouts.app')

@section('title', 'Librería El Lápiz - Registrar libro')

@section('footer-text', 'Integradora - Herlan Javier Castro Acero - 18 de agosto de 2026')

@section('content')
    <section class="form-container">
        <h1>Librería El Lápiz</h1>
        <h2>Registrar libro</h2>

        @if ($errors->any())
            <ul class="aviso error">
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

@extends('layouts.app')

@section('title', 'Librería El Lápiz')

@section('footer-text', 'Integradora - Herlan Javier Castro Acero - 18 de agosto de 2026')

@section('content')
    <section class="panel-container">
        <h1>Librería El Lápiz</h1>

        <p>
            Librería El Lápiz ofrece libros para estudiantes y lectores de todas
            las edades. Aquí puedes consultar los libros registrados y sus precios.
        </p>

        <p>Hay {{ count($libros) }} libros en el catálogo.</p>

        @if (count($libros) === 0)
            <p>Todavía no hay libros registrados.</p>
        @endif

        @foreach ($libros as $libro)
            <article>
                <h2>{{ $libro->titulo }}</h2>
                <p>Precio: {{ $libro->precio }} Bs</p>
            </article>
        @endforeach

        <p>Catálogo atendido por Herlan Javier Castro Acero</p>

        <a href="/libros/nuevo">Registrar nuevo libro</a>
    </section>
@endsection

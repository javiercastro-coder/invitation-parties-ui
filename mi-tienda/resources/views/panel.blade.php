@extends('layouts.app')

@section('title', 'Panel administrativo - Viajando Ando')

@section('content')
    <section class="panel-container">
        <h1>Panel administrativo</h1>

        @if (session('exito'))
            <p class="aviso exito" role="status">{{ session('exito') }}</p>
        @endif

        <section class="panel-acciones">
            <a href="{{ route('lugares.crear') }}">Nuevo lugar turístico</a>
            <a href="{{ route('inicio') }}">Ver inicio</a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Cerrar sesión</button>
            </form>
        </section>

        <h2>Lugares registrados</h2>

        @forelse ($lugares as $lugar)
            <section class="panel-lugar">
                <h3>{{ $lugar->nombre }}</h3>
                <p>{{ $lugar->ubicacion }}</p>
            </section>
        @empty
            <p>Todavía no hay lugares registrados.</p>
        @endforelse
    </section>
@endsection

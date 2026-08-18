@extends('layouts.app')

@section('title', 'Inicio - Viajando Ando')

@section('content')
    <section id="main-image">
        <img src="{{ asset('img/image.png') }}" alt="Paisaje turístico">

        <h1>Descubre el mundo con Viajando Ando</h1>

        <p>
            Encuentra destinos increíbles, paquetes turísticos y
            experiencias inolvidables para tus próximas vacaciones.
            Planifica tu viaje de manera fácil, segura y personalizada.
        </p>

        <a href="{{ route('contacto') }}">Contáctanos</a>
    </section>

    <section class="categories" id="paquetes">
        <h2>Paquetes turísticos</h2>

        <p>
            Tenemos diferentes opciones de viajes para familias y grupos.
        </p>
    </section>

    <section class="places" id="destinos">
        <h2>Destinos</h2>

        @forelse ($lugares as $lugar)
            <section class="card-places">
                @if ($lugar->imagen)
                    <img
                        src="{{ asset('img/' . $lugar->imagen) }}"
                        alt="Imagen de {{ $lugar->nombre }}"
                    >
                @endif

                <h3>{{ $lugar->nombre }}</h3>
                <p><strong>Ubicación:</strong> {{ $lugar->ubicacion }}</p>
                <p>{{ $lugar->descripcion }}</p>
            </section>
        @empty
            <p class="sin-lugares">Todavía no hay destinos registrados.</p>
        @endforelse
    </section>

    <section class="more-information">
        <h2>Más información</h2>

        <p>
            Nuestros paquetes pueden incluir transporte, hospedaje
            y actividades.
        </p>
    </section>
@endsection

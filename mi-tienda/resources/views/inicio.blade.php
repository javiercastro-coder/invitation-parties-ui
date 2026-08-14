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

        <section class="card-places">
            <h3>Cancún</h3>
            <p>Disfruta de playas, hoteles y actividades turísticas.</p>
        </section>

        <section class="card-places">
            <h3>Cusco</h3>
            <p>Conoce lugares históricos y paisajes inolvidables.</p>
        </section>
    </section>

    <section class="more-information">
        <h2>Más información</h2>

        <p>
            Nuestros paquetes pueden incluir transporte, hospedaje
            y actividades.
        </p>
    </section>
@endsection

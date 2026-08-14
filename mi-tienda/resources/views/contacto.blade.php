@extends('layouts.app')

@section('title', 'Contacto - Viajando Ando')

@section('content')
    <section id="contacto">
        <h1>Contáctanos</h1>

        <form id="form-contacto" action="#" method="POST" novalidate>
            @csrf

            <section>
                <label for="nombre">Nombre completo</label>
                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    placeholder="Tu nombre y apellido"
                    required
                >
            </section>

            <section>
                <label for="correo">Correo electrónico</label>
                <input
                    type="email"
                    id="correo"
                    name="correo"
                    placeholder="tunombre@correo.com"
                    required
                >
            </section>

            <section>
                <label for="mensaje">Mensaje</label>
                <textarea
                    id="mensaje"
                    name="mensaje"
                    rows="5"
                    placeholder="Cuéntanos qué destino o paquete te interesa"
                    required
                ></textarea>
            </section>

            <button type="submit">Enviar</button>
            <p id="aviso-contacto" class="aviso" role="status" aria-live="polite"></p>
        </form>

        <a href="{{ route('inicio') }}">Regresar al inicio</a>
    </section>
@endsection

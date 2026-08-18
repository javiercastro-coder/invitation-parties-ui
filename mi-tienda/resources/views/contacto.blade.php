@extends('layouts.app')

@section('title', 'Contacto - Viajando Ando')

@section('content')
    <section id="contacto">
        <h1>Contáctanos</h1>

        @if (session('exito'))
            <p class="aviso exito" role="status">{{ session('exito') }}</p>
        @endif

        <form id="form-contacto" action="{{ route('contacto.enviar') }}" method="POST" novalidate>
            @csrf

            @if ($errors->any())
                <p id="aviso-contacto" class="aviso error" role="alert" aria-live="polite">
                    {{ $errors->first() }}
                </p>
            @else
                <p id="aviso-contacto" class="aviso" role="status" aria-live="polite"></p>
            @endif

            <section>
                <label for="nombre">Nombre completo</label>
                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    value="{{ old('nombre') }}"
                    placeholder="Tu nombre y apellido"
                    @error('nombre') class="campo-error" @enderror
                    required
                >
            </section>

            <section>
                <label for="correo">Correo electrónico</label>
                <input
                    type="email"
                    id="correo"
                    name="correo"
                    value="{{ old('correo') }}"
                    placeholder="tunombre@correo.com"
                    @error('correo') class="campo-error" @enderror
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
                    @error('mensaje') class="campo-error" @enderror
                    required
                >{{ old('mensaje') }}</textarea>
            </section>

            <button type="submit">Enviar</button>
        </form>

        <a href="{{ route('inicio') }}">Regresar al inicio</a>
    </section>
@endsection

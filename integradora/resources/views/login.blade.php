@extends('layouts.app')

@section('title', 'Login - Viajando Ando')

@section('content')
    <section class="auth-container">
        <h1>Iniciar sesión</h1>

        @if ($errors->any())
            <p class="aviso error" role="alert">{{ $errors->first() }}</p>
        @endif

        <form action="{{ route('login.procesar') }}" method="POST">
            @csrf

            <section>
                <label for="email">Correo electrónico</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                >
            </section>

            <section>
                <label for="password">Contraseña</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                >
            </section>

            <button type="submit">Iniciar sesión</button>
        </form>
    </section>
@endsection

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Viajando Ando')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav>
            <section class="navbar-logo">
                <img src="{{ asset('img/logo.png') }}" alt="Logo de Viajando Ando">
            </section>

            <button type="button" id="btn-menu" aria-label="Abrir menú">☰</button>

            <section class="navbar-navegation">
                <a href="{{ route('inicio') }}#destinos">Destinos</a>
                <a href="{{ route('inicio') }}#paquetes">Paquetes</a>
                <a href="{{ route('contacto') }}">Contacto</a>
                <button type="button" id="btn-tema">Modo oscuro</button>
            </section>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <section class="footer-content">
            <section>
                <h3>Viajando Ando</h3>

                <p>
                    Encuentra destinos y paquetes turísticos para tus próximas
                    vacaciones.
                </p>
            </section>

            <section>
                <h3>Contacto</h3>

                <ul>
                    <li>Teléfono: +591 71234567</li>
                    <li>Ubicación: La Paz, Bolivia</li>
                    <li>Email: viajandoando@gmail.com</li>
                </ul>
            </section>

            <section class="social-media">
                <h3>Redes sociales</h3>

                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
            </section>
        </section>

        <section class="footer-bottom">
            <p>Herlan Castro - 2026</p>
        </section>
    </footer>
</body>
</html>

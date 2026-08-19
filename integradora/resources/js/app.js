document.addEventListener('DOMContentLoaded', () => {
    const cuerpo = document.body;
    const botonModo = document.querySelector('#btn-tema');
    const botonMenu = document.querySelector('#btn-menu');
    const menu = document.querySelector('.navbar-navegation');

    if (botonModo) {
        let modoOscuro = cuerpo.classList.contains('modo-oscuro');

        botonModo.addEventListener('click', () => {
            cuerpo.classList.toggle('modo-oscuro');
            modoOscuro = !modoOscuro;
            botonModo.textContent = modoOscuro ? 'Modo claro' : 'Modo oscuro';
        });
    }

    if (botonMenu && menu) {
        botonMenu.addEventListener('click', () => {
            menu.classList.toggle('menu-visible');
        });
    }

    const formularioContacto = document.querySelector('#form-contacto');
    const avisoContacto = document.querySelector('#aviso-contacto');
    const campoNombre = document.querySelector('#nombre');
    const campoCorreo = document.querySelector('#correo');
    const campoMensaje = document.querySelector('#mensaje');

    if (
        !formularioContacto
        || !avisoContacto
        || !campoNombre
        || !campoCorreo
        || !campoMensaje
    ) {
        return;
    }

    const mostrarError = (mensaje, campo) => {
        avisoContacto.textContent = mensaje;
        avisoContacto.classList.add('error');
        avisoContacto.classList.remove('exito');
        campo.classList.add('campo-error');
        campo.focus();
    };

    const revisarFormulario = (event) => {
        const nombre = campoNombre.value.trim();
        const correo = campoCorreo.value.trim();
        const mensaje = campoMensaje.value.trim();
        const expresionCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        campoNombre.classList.remove('campo-error');
        campoCorreo.classList.remove('campo-error');
        campoMensaje.classList.remove('campo-error');

        if (nombre === '') {
            event.preventDefault();
            mostrarError('escribe tu nombre completo.', campoNombre);
            return;
        }

        if (nombre.length < 3) {
            event.preventDefault();
            mostrarError('el nombre debe tener al menos 3 caracteres.', campoNombre);
            return;
        }

        if (correo === '') {
            event.preventDefault();
            mostrarError('escribe tu correo electronico.', campoCorreo);
            return;
        }

        if (!expresionCorreo.test(correo)) {
            event.preventDefault();
            mostrarError('Escribe un correo electronico valido', campoCorreo);
            return;
        }

        if (mensaje === '') {
            event.preventDefault();
            mostrarError('escribe un mensaje.', campoMensaje);
            return;
        }

        if (mensaje.length < 10) {
            event.preventDefault();
            mostrarError('El mensaje debe tener al menos 10 caracteres.', campoMensaje);
        }
    };

    formularioContacto.addEventListener('submit', revisarFormulario);

    [campoNombre, campoCorreo, campoMensaje].forEach((campo) => {
        campo.addEventListener('input', () => {
            campo.classList.remove('campo-error');
        });
    });
});

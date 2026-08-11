const cuerpo = document.querySelector("body");
const botonModo = document.querySelector("#btn-tema");
const botonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector(".navbar-navegation");
const formularioContacto = document.querySelector("#form-contacto");
const avisoContacto = document.querySelector("#aviso-contacto");
const campoNombre = document.querySelector("#nombre");
const campoCorreo = document.querySelector("#correo");
const campoMensaje = document.querySelector("#mensaje");

let modoOscuro = false;

function alternarModo() {
    cuerpo.classList.toggle("modo-oscuro");
    modoOscuro = !modoOscuro;

    if (modoOscuro) {
        botonModo.textContent = "Modo claro";
    } else {
        botonModo.textContent = "Modo oscuro";
    }
}

botonModo.addEventListener("click", alternarModo);

botonMenu.addEventListener("click", function () {
    menu.classList.toggle("menu-visible");
});

function mostrarError(mensaje, campo) {
    avisoContacto.textContent = mensaje;
    avisoContacto.classList.add("error");
    avisoContacto.classList.remove("exito");
    campo.classList.add("campo-error");
    campo.focus();
}

function revisarFormulario(event) {
    const nombre = campoNombre.value.trim();
    const correo = campoCorreo.value.trim();
    const mensaje = campoMensaje.value.trim();
    const expresionCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    campoNombre.classList.remove("campo-error");
    campoCorreo.classList.remove("campo-error");
    campoMensaje.classList.remove("campo-error");

    if (nombre === "") {
        event.preventDefault();
        mostrarError("escribe tu nombre completo.", campoNombre);
        return;
    }

    if (nombre.length < 3) {
        event.preventDefault();
        mostrarError("el nombre debe tener al menos 3 caracteres.", campoNombre);
        return;
    }

    if (correo === "") {
        event.preventDefault();
        mostrarError("escribe tu correo electronico.", campoCorreo);
        return;
    }

    if (!expresionCorreo.test(correo)) {
        event.preventDefault();
        mostrarError(
            "Escribe un correo electronico valido",
            campoCorreo
        );
        return;
    }

    if (mensaje === "") {
        event.preventDefault();
        mostrarError("escribe un mensaje.", campoMensaje);
        return;
    }

    if (mensaje.length < 10) {
        event.preventDefault();
        mostrarError("El mensaje debe tener al menos 10 caracteres.", campoMensaje);
        return;
    }
}

if (
    formularioContacto !== null &&
    avisoContacto !== null &&
    campoNombre !== null &&
    campoCorreo !== null &&
    campoMensaje !== null
) {
    formularioContacto.addEventListener("submit", revisarFormulario);

    campoNombre.addEventListener("input", function () {
        campoNombre.classList.remove("campo-error");
    });

    campoCorreo.addEventListener("input", function () {
        campoCorreo.classList.remove("campo-error");
    });

    campoMensaje.addEventListener("input", function () {
        campoMensaje.classList.remove("campo-error");
    });
}

const formularioHelados = document.querySelector("#form-helados");
const avisoHelados = document.querySelector("#aviso-helados");

function manejarEnvio(event) {
    event.preventDefault();

    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;
    const sabores = document.querySelector("#sabores").value;
}

formularioHelados.addEventListener("submit", manejarEnvio);

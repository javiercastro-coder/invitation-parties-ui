const formularioHelados = document.querySelector("#form-helados");
const avisoHelados = document.querySelector("#aviso-helados");

function manejarEnvio(event) {
    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;
    const sabores = document.querySelector("#sabores").value;

    if (nombre === "" || correo === "") {
        event.preventDefault();
        avisoHelados.textContent = "Falta tu nombre o correo";
        avisoHelados.classList.add("error");
        avisoHelados.classList.remove("exito");
    } else if (!correo.includes("@")) {
        event.preventDefault();
        avisoHelados.textContent = "Ese correo no tiene arroba";
        avisoHelados.classList.add("error");
        avisoHelados.classList.remove("exito");
    } else {
        avisoHelados.textContent = "Pedido listo";
        avisoHelados.classList.add("exito");
        avisoHelados.classList.remove("error");
    }
}
formularioHelados.addEventListener("submit", manejarEnvio);

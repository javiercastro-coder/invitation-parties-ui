const cuerpo = document.querySelector("body");
const botonModo = document.querySelector("#btn-tema");

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

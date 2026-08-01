const cuerpo = document.querySelector("body");
const botonModo = document.querySelector("#btn-tema");
const botonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector(".navbar-navegation");

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

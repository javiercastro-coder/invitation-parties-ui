function confirmarPedidoo() {
    const mensaje = document.querySelector("#mensaje");

    mensaje.textContent = "Pedido recibido - te atiende Herlan Javier Castro Acero";

    mensaje.classList.remove("oculto");
}

const botonConf = document.querySelector("#btn-confirmar");

botonConf.addEventListener("click", confirmarPedidoo);
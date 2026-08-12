<?php

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$sabores = $_POST["sabores"];

$carta = array(
    "Cono simple - Bs 8",
    "Copa doble - Bs 15",
    "Litro para llevar - Bs 35"
);
echo "<h1>Pedido anotado - te atiende Herlan Javier Castro Acero</h1>";
echo "<p>Nombre: " . $nombre . "</p>";
echo "<p>Correo: " . $correo . "</p>";
echo "<p>Sabores: " . $sabores . "</p>";

echo "<h2>Carta de la heladería</h2>";
foreach ($carta as $producto) {
    echo $producto . "<br>";
}
echo "<p>Te atiende Herlan Javier Castro Acero</p>";

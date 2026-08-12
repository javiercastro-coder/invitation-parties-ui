<?php

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$sabores = $_POST["sabores"];

echo "<h1>Pedido recibido</h1>";
echo "<p>Nombre: " . $nombre . "</p>";
echo "<p>Correo: " . $correo . "</p>";
echo "<p>Sabores: " . $sabores . "</p>";

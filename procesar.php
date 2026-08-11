<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = htmlspecialchars($_POST["nombre"] ?? "");
    $correo = htmlspecialchars($_POST["correo"] ?? "");
    $mensaje = htmlspecialchars($_POST["mensaje"] ?? "");

    echo "<h1>Datos recibidos</h1>";
    echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
    echo "<p><strong>Correo:</strong> " . $correo . "</p>";
    echo "<p><strong>Mensaje:</strong> " . $mensaje . "</p>";
} else {
    echo "<p>No se recibieron datos del formulario.</p>";
}
?>

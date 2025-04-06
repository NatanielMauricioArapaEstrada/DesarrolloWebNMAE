<?php
$conexion = new mysqli("localhost", "root", "", "bd_tienda");
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>

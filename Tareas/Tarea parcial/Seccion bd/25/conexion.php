<?php
$conexion = new mysqli("localhost", "root", "", "bd_tienda",3307);
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>

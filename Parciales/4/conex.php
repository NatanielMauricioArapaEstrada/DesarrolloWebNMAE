<?php

$host = "localhost";      
$usuario = "root";         
$contrasena = "";          
$basedatos = "bd_biblioteca";


$conn = new mysqli($host, $usuario, $contrasena, $basedatos);


if ($conn->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
} 
?>

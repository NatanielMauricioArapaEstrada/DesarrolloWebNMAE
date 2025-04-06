<?php
session_start();
include("conexion.php");

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuario WHERE usuario='$usuario' AND password='$password'";
$resultado = $conexion->query($sql);

if ($fila = $resultado->fetch_assoc()) {
    $_SESSION['usuario'] = $fila['usuario'];
    $_SESSION['nivel'] = $fila['nivel'];
    header("Location: productos.php");
} else {
    echo "Usuario o contraseña incorrectos.";
}
?>

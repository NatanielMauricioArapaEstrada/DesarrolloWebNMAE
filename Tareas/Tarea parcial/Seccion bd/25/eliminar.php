<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['nivel'] != 1) {
    echo "No tienes permiso para eliminar.";
    exit();
}
include("conexion.php");

$id = $_GET['id'];
$sql = "DELETE FROM producto WHERE idproducto = $id";
$conexion->query($sql);

header("Location: productos.php");
?>

<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
include("conexion.php");

$usuario = $_SESSION['usuario'];
$nivel = $_SESSION['nivel'];
$tipo = $nivel == 1 ? "administrador" : "usuario";

echo "<p>Usuario: $usuario | Tipo: $tipo</p>";
echo '<p><a href="cerrar.php">Cerrar sesión</a></p>';

$sql = "SELECT * FROM producto";
$resultado = $conexion->query($sql);

echo "<table border='1'>";
echo "<tr><th>Producto</th><th>Precio</th><th>Imagen</th>";
if ($nivel == 1) echo "<th>Acciones</th>";
echo "</tr>";

while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>{$fila['producto']}</td>";
    echo "<td>{$fila['precio']}</td>";
    echo "<td><img src='{$fila['imagen']}' width='100'></td>";
    if ($nivel == 1) {
        echo "<td><a href='#'>Editar</a></td>";
        echo "<td><a href='eliminar.php?id={$fila['idproducto']}'>Eliminar</a></td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

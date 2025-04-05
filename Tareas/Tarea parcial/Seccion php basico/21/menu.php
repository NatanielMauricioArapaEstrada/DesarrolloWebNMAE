<?php
session_start();
include 'estante.php';

// Si no hay estante en sesión, crear uno nuevo
if (!isset($_SESSION['estante'])) {
    $_SESSION['estante'] = serialize(new Estante());
}

$estante = unserialize($_SESSION['estante']);

// Insertar libro si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['libro'], $_POST['fila'])) {
    $fila = intval($_POST['fila']);
    $libro = trim($_POST['libro']);
    if ($libro != "") {
        $estante->insertarLibro($fila, $libro);
        $_SESSION['estante'] = serialize($estante);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Estante de Libros</title>
</head>
<body>

<h2>📚 Estante de 3 Filas</h2>

<!-- Formulario para insertar libros -->
<h3>Insertar libro en una fila</h3>
<form method="post">
    Libro: <input type="text" name="libro" required>
    Fila:
    <select name="fila">
        <option value="1">Fila 1</option>
        <option value="2">Fila 2</option>
        <option value="3">Fila 3</option>
    </select>
    <input type="submit" value="Insertar">
</form>

<!-- Mostrar fila específica -->
<h3>Mostrar libros de una fila</h3>
<form method="get">
    Seleccionar fila:
    <select name="mostrar_fila">
        <option value="1">Fila 1</option>
        <option value="2">Fila 2</option>
        <option value="3">Fila 3</option>
    </select>
    <input type="submit" value="Mostrar">
</form>

<?php
if (isset($_GET['mostrar_fila'])) {
    $fila = intval($_GET['mostrar_fila']);
    $libros = $estante->mostrar($fila);
    echo "<h4>Libros en la Fila $fila:</h4><ul>";
    foreach ($libros as $libro) {
        echo "<li>$libro</li>";
    }
    echo "</ul>";
}
?>

<!-- Mostrar todo el estante -->
<h3>Mostrar todos los libros del estante</h3>
<?php
$todo = $estante->mostrarArmario();
foreach ($todo as $nombreFila => $libros) {
    echo "<strong>$nombreFila:</strong><ul>";
    foreach ($libros as $libro) {
        echo "<li>$libro</li>";
    }
    echo "</ul>";
}
?>

</body>
</html>

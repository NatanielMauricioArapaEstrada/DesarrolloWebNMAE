<?php
session_start();

// Si se envió n por GET, guardarlo en la sesión
if (isset($_GET['n'])) {
    $_SESSION['n'] = intval($_GET['n']);
}

$n = isset($_SESSION['n']) ? $_SESSION['n'] : 0;

// Procesar si ya se enviaron los vectores
$resultado = null;
if (isset($_GET['vector1']) && isset($_GET['vector2'])) {
    $v1 = $_GET['vector1']; // 1xn
    $v2 = $_GET['vector2']; // nx1
    $resultado = 0;
    for ($i = 0; $i < $n; $i++) {
        $resultado += $v1[$i] * $v2[$i];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Multiplicación de vectores</title>
</head>
<body>

<h2>Multiplicar Vector 1xn por Vector nx1 (n = <?php echo $n; ?>)</h2>

<?php if ($n > 0): ?>
    <form method="get">
        <!-- Necesario para que persista n cuando se envían los vectores -->
        <input type="hidden" name="n" value="<?php echo $n; ?>">

        <h3>Vector 1 x n:</h3>
        <?php for ($i = 0; $i < $n; $i++): ?>
            <input type="number" name="vector1[]" required>
        <?php endfor; ?>

        <h3>Vector n x 1:</h3>
        <?php for ($i = 0; $i < $n; $i++): ?>
            <input type="number" name="vector2[]" required><br>
        <?php endfor; ?>

        <br><input type="submit" value="Multiplicar">
    </form>

    <?php if ($resultado !== null): ?>
        <h3>Resultado de la multiplicación: <?php echo $resultado; ?></h3>
    <?php endif; ?>

<?php else: ?>
    <p>No se ha definido un valor válido para n. <a href="formn.php">Volver</a></p>
<?php endif; ?>

</body>
</html>

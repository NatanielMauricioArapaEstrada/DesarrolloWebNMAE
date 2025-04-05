<?php
if (!isset($_COOKIE['valor']) || !isset($_GET['op'])) {
    echo "<p>Falta el número o la operación. <a href='index.php'>Volver</a></p>";
    exit();
}

$n = intval($_COOKIE['valor']);
$op = $_GET['op'];
$resultado = "";

switch ($op) {
    case 'sumatoria':
        $resultado = ($n * ($n + 1)) / 2;
        break;
    case 'factorial':
        $resultado = 1;
        for ($i = 1; $i <= $n; $i++) {
            $resultado *= $i;
        }
        break;
    case 'fibonacci':
        $a = 0; $b = 1;
        for ($i = 2; $i <= $n; $i++) {
            $temp = $a + $b;
            $a = $b;
            $b = $temp;
        }
        $resultado = ($n == 0) ? 0 : $b;
        break;
    case 'dividir':
        $resultado = $n / 2;
        break;
    default:
        $resultado = "Operación no válida.";
}
?>

<!DOCTYPE html>
<html>
<head><title>Resultado</title></head>
<body>
<h2>Resultado de la operación "<?php echo $op; ?>" con n = <?php echo $n; ?>:</h2>
<p><strong><?php echo $resultado; ?></strong></p>
<p><a href="menu.php">Volver al menú</a></p>
</body>
</html>

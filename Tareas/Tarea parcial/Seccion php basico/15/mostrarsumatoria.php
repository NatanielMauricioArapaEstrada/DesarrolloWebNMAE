<?php
include 'funciones.php';

if (isset($_GET['n'])) {
    $n = intval($_GET['n']);

    if ($n < 0) {
        echo "Por favor, ingrese un número positivo.";
    } else {
        $resultado = fibonaci($n);
        echo "<h2>Sumatoria de la serie Fibonacci hasta n=$n:</h2>";
        echo "<p>Resultado: <strong>$resultado</strong></p>";
    }
} else {
    echo "No se proporcionó un valor para n.";
}
?>

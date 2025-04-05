<?php
if (isset($_GET["b"]) && isset($_GET["h"])) {
    $b = $_GET["b"];
    $h = $_GET["h"];
    
    // Validación: asegurar que sean números positivos
    if ($b > 0 && $h > 0) {
        $area = ($b * $h) / 2;
        echo "<h2>El área del triángulo es: $area</h2>";
    } else {
        echo "<h2>Error: La base y la altura deben ser números positivos.</h2>";
    }
} else {
    echo "<h2>Error: No se han recibido los valores correctamente.</h2>";
}
?>

<?php
    if (isset($_GET['b']) && isset($_GET['h'])) {
        $b = floatval($_GET['b']);
        $h = floatval($_GET['h']);

        $area = ($b * $h) / 2;

        echo "<p>El área del triángulo con base $b y altura $h es: <strong>$area</strong></p>";
    } else {

        echo "<p style='color: red;'>Error: No se recibieron los valores de la base y la altura.</p>";
    }
    echo "<a href='menu.html'>Volver a calcular el area</a>"
    ?>


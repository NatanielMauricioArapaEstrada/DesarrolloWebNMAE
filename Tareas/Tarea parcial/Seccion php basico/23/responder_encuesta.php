<?php
if (isset($_POST['opcion'])) {
    $opcion = $_POST['opcion'];
    echo "<h2>Gracias por participar en la encuesta.</h2>";
    echo "<p>Usted seleccionó: <strong>$opcion</strong></p>";
} else {
    echo "<p>No se recibió ninguna respuesta.</p>";
}
?>

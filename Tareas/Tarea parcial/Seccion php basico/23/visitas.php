<?php
// Configuramos la cookie
if (isset($_COOKIE['visitas'])) {
    $visitas = $_COOKIE['visitas'] + 1;
    setcookie("visitas", $visitas, time() + (86400 * 30)); 
    $mensaje = "Gracias por ser un visitante frecuente. Usted ha visitado este sitio $visitas veces.";
} else {
    $visitas = 1;
    setcookie("visitas", $visitas, time() + (86400 * 30)); 
    $mensaje = "Bienvenido. Es su primera visita a este sitio.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Control de Visitas</title>
</head>
<body>

<h2><?php echo $mensaje; ?></h2>

<?php if ($visitas > 5): ?>
    <h3>Encuesta</h3>
    <form method="post" action="responder_encuesta.php">
        <label>¿Qué le gusta de este sitio?</label><br><br>
        <input type="radio" name="opcion" value="presentacion" required> a) Buena presentación<br>
        <input type="radio" name="opcion" value="facil"> b) Fácil de usar<br>
        <input type="radio" name="opcion" value="rapido"> c) Es rápido<br>
        <input type="radio" name="opcion" value="contenido"> d) Buen contenido<br><br>
        <input type="submit" value="Enviar respuesta">
    </form>
<?php endif; ?>

</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['numero'])) {
    $numero = intval($_POST['numero']);
    setcookie("valor", $numero, time() + 3600); // cookie válida por 1 hora
    header("Location: menu.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head><title>Ingresar número</title></head>
<body>
<h2>Ingrese un número</h2>
<form method="post">
    Número: <input type="number" name="numero" required>
    <input type="submit" value="Guardar y continuar">
</form>
</body>
</html>

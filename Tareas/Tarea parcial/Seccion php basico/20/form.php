<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Introducir N</title>
</head>
<body>
<h2>Ingrese el valor de n</h2>
<form action="vectores.php" method="get">
    Valor de n: <input type="number" name="n" min="1" required>
    <input type="submit" value="Continuar">
</form>
</body>
</html>

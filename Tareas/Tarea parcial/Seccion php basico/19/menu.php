<?php
if (!isset($_COOKIE['valor'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head><title>Menú de Operaciones</title></head>
<body>
<h2>Menú de operaciones con el número: <?php echo $_COOKIE['valor']; ?></h2>
<ul>
    <li><a href="operacion.php?op=sumatoria">Sumatoria</a></li>
    <li><a href="operacion.php?op=factorial">Factorial</a></li>
    <li><a href="operacion.php?op=fibonacci">Fibonacci</a></li>
    <li><a href="operacion.php?op=dividir">Dividir entre 2</a></li>
</ul>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <link rel="stylesheet" href="E1.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora</h1>
        <?php
            if (isset($_GET["numero"])) {
                $valor = $_GET["numero"];
                $cadena_de_valores = str_split($valor);
                $cadena_de_valores = array_map('intval', $cadena_de_valores);
                $Resultado = array_sum($cadena_de_valores);
                
                echo "<p class='resultado'>El resultado de la suma de valores es: $Resultado</p>";
            } else {
                echo "<p class='resultado'>No se ingresó un número.</p>";
            }
        ?>
    </div>
</body>
</html>

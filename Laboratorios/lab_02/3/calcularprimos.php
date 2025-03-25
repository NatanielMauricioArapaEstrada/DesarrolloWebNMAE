<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Números Primos</title>
    <link rel="stylesheet" href="E3.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Números Primos</h1>
        <?php
        // Recibir el número desde el formulario
        $numero = isset($_GET["numero"]) ? intval($_GET["numero"]) : 0;

        function esPrimo($n) {
            if ($n < 2) return false;
            if ($n == 2) return true;
            if ($n % 2 == 0) return false;

            for ($i = 3; $i * $i <= $n; $i += 2) {
                if ($n % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        $numeros_evaluar = 2;
        $contador = 0;

        echo "<ol class='lista-primos'>";
        while ($contador < $numero) {
            if (esPrimo($numeros_evaluar)) {
                echo "<li>" . $numeros_evaluar . "</li>";
                $contador++;
            }
            $numeros_evaluar++;
        }
        echo "</ol>";
        ?>
    </div>
</body>
</html>

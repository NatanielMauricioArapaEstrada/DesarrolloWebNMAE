<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Temperatura</title>
    <link rel="stylesheet" href="E2.css">
</head>
<body>
    <div class="container">
        <h1>Unidades de Medida de la Temperatura</h1>
        <?php
        if (isset($_GET["numero"]) && isset($_GET["unidad"])) {
            $valor = $_GET["numero"];
            $tipo_de_temperatura = $_GET["unidad"];

            echo "<table>";
            echo "<tr><th>Temperatura</th><th>Valor</th></tr>";

            switch ($tipo_de_temperatura) {
                case "C":
                    $Fahrenheit = ($valor * 1.8) + 32;
                    $Kelvin = $valor + 273.15;
                    echo "<tr><td>Fahrenheit</td><td>{$Fahrenheit}°F</td></tr>";
                    echo "<tr><td>Kelvin</td><td>{$Kelvin}°K</td></tr>";
                    break;
                case "F":
                    $Celsius = ($valor - 32) / 1.8;
                    $Kelvin = ($valor + 459.67) * 5 / 9;
                    echo "<tr><td>Celsius</td><td>{$Celsius}°C</td></tr>";
                    echo "<tr><td>Kelvin</td><td>{$Kelvin}°K</td></tr>";
                    break;
                case "K":
                    $Celsius = $valor - 273.15;
                    $Fahrenheit = ($valor * 9 / 5) - 459.67;
                    echo "<tr><td>Celsius</td><td>{$Celsius}°C</td></tr>";
                    echo "<tr><td>Fahrenheit</td><td>{$Fahrenheit}°F</td></tr>";
                    break;
            }

            echo "</table>";
        } else {
            echo "<p class='resultado'>No se ingresó un número.</p>";
        }
        ?>
    </div>
</body>
</html>

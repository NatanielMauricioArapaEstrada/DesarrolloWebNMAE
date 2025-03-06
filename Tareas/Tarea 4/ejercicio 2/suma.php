<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Suma</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            font-size: 20px;
        }
        .numero {
            background-color: green;
            color: white;
        }
        .operando {
            background-color: white;
            color: black;
        }
    </style>
</head>
<body>
    <h1>Resultado de la Suma</h1>
    <?php
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = floatval($_GET['num1']); 
        $num2 = floatval($_GET['num2']); 

        $suma = $num1 + $num2;

        echo "<table>
                <tr>
                    <td class='numero'>$num1</td>
                    <td class='operando'>+</td>
                    <td class='numero'>$num2</td>
                    <td class='operando'>=</td>
                    <td class='numero'>$suma</td>
                </tr>
              </table>";
    } else {
        echo "<p style='color: red;'>Error: No se recibieron los valores de los números.</p>";
    }
    ?>
    <br>
    <a href="index.html">Volver al formulario</a>
</body>
</html>
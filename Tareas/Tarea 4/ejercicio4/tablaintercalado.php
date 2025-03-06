<?php
if (isset($_GET['filas']) && isset($_GET['columnas'])) {
    $filas = $_GET['filas'];
    $columnas = $_GET['columnas'];
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Tabla Intercalada</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            td {
                border: 1px solid black;
                padding: 8px;
                text-align: center;
            }
            .rojo {
                background-color: red;
            }
            .amarillo {
                background-color: yellow;
            }
            .verde {
                background-color: green;
            }
        </style>
    </head>
    <body>
        <table>
            <?php
            $contador = 1;
            for ($i = 1; $i <= $filas; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $columnas; $j++) {
                    $clase = "";
                    if ($contador % 3 == 0) {
                        $clase = "rojo";
                    } elseif ($contador % 3 == 1) {
                        $clase = "amarillo";
                    } else {
                        $clase = "verde";
                    }
                    echo "<td class='" . $clase . "'>" . $contador . "</td>";
                    $contador++;
                }
                echo "</tr>";
            }
            ?>
        </table>
    </body>
    </html>
    <?php
} else {
    echo "<h1>Por favor, ingrese el número de filas y columnas.</h1>";
}
?>
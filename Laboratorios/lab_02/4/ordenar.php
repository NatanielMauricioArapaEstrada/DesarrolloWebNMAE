<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alfabeto Ordenado</title>
    <link rel="stylesheet" href="E4.css">
</head>
<body>
    <div class="container">
        <h1>Resultado del Ordenamiento</h1>
        <?php
        function ordenarPalabras($lista) {
            sort($lista);
            return $lista;
        }

        if (isset($_GET["texto"])) {
            $alfabeto = $_GET["texto"]; 

            $alfabeto = array_map('strtoupper', $alfabeto); 
            $alfabeto = array_unique($alfabeto); 
            $alfabeto = ordenarPalabras($alfabeto); 

            echo "<ol class='lista-alfabeto'>";
            foreach ($alfabeto as $letra) {
                echo "<li>$letra</li>";
            }
            echo "</ol>";
        } else {
            echo "<p>No se enviaron letras.</p>";
        }
        ?>
    </div>
</body>
</html>

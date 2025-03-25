<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="E4.css">
    <title>Alfabeto</title>
</head>
<body>
    <div class="container">
        <h1>Ingrese las letras</h1>
        <?php
            $valor = isset($_GET["numero"]) ? intval($_GET["numero"]) : 1;
            echo "<form action='ordenar.php' method='get'>";
            echo "<input type='hidden' name='contador' value='$valor'>";
            for ($i = 0; $i < $valor; $i++) {
                echo "<input type='text' name='texto[]' maxlength='1' required>";
            }
            echo "<br><br><input type='submit' value='Ordenar'>";
            echo "</form>";
        ?>
    </div>
</body>
</html>

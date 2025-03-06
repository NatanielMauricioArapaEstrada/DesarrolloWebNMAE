<!DOCTYPE html>
<html>
<head>
    <title>Generar Tabla Intercalada</title>
</head>
<body>
    <h1>Ingrese el número de filas y columnas</h1>
    <form action="tablaintercalado.php" method="GET">
        <label for="filas">Filas:</label>
        <input type="number" name="filas" id="filas" required><br><br>

        <label for="columnas">Columnas:</label>
        <input type="number" name="columnas" id="columnas" required><br><br>

        <input type="submit" value="Generar Tabla">
    </form>
</body>
</html>
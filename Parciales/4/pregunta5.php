<?php
include("conex.php");

// Columnas válidas para ordenar
$columnas_validas = ["titulo", "autor", "editorial", "anio"];
$columna = isset($_GET['columna']) && in_array($_GET['columna'], $columnas_validas) ? $_GET['columna'] : "titulo";
$orden = (isset($_GET['orden']) && $_GET['orden'] === "desc") ? "desc" : "asc";
$nuevo_orden = ($orden === "asc") ? "desc" : "asc";

// Ajustar columna si es editorial (porque el nombre viene de otra tabla)
$columna_sql = ($columna === "editorial") ? "editoriales.editorial" : "libros.$columna";

// Consulta con JOIN a editoriales
$sql = "SELECT libros.imagen, libros.titulo, libros.autor, editoriales.editorial AS editorial, libros.anio
        FROM libros
        INNER JOIN editoriales ON libros.ideditorial = editoriales.id
        ORDER BY $columna_sql $orden";


$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Libros</title>
    <style>
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #aaa;
            padding: 10px;
            text-align: center;
        }
        th a {
            color: #333;
            text-decoration: none;
        }
        img {
            width: 60px;
            height: auto;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Libros Registrados</h2>
    <table>
        <tr>
            <th>Imagen</th>
            <th><a href="?columna=titulo&orden=<?php echo $nuevo_orden; ?>">Título</a></th>
            <th><a href="?columna=autor&orden=<?php echo $nuevo_orden; ?>">Autor</a></th>
            <th><a href="?columna=editorial&orden=<?php echo $nuevo_orden; ?>">Editorial</a></th>
            <th><a href="?columna=anio&orden=<?php echo $nuevo_orden; ?>">Año</a></th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()): ?>
            <tr>
                <td><img src="<?php echo $row['imagen']; ?>" alt="Imagen del libro"></td>
                <td><?php echo $row['titulo']; ?></td>
                <td><?php echo $row['autor']; ?></td>
                <td><?php echo $row['editorial']; ?></td>
                <td><?php echo $row['anio']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php
include "conexion.php";

$query = "SELECT alumnos.id, alumnos.fotografia, alumnos.nombres, alumnos.apellidos, 
                 alumnos.cu, alumnos.sexo, carrera.carrera 
          FROM alumnos 
          JOIN carrera ON alumnos.codigocarrera = carrera.codigo";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <link rel="stylesheet" href="Styles.css">
</head>
<body>

<div></div>
<table class="table_read">
    <thead>
        <tr>
            <th>Nro</th>
            <th>Fotografía</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>CU</th>
            <th>Sexo</th>
            <th>Carrera</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><img src="<?php echo $row['fotografia']; ?>" width="50" height="50" alt="Foto"></td>
                <td><?php echo $row['nombres']; ?></td>
                <td><?php echo $row['apellidos']; ?></td>
                <td><?php echo $row['cu']; ?></td>
                <td><?php  if($row['sexo'] == "M"){
        echo "Masculino";
    } else {
        echo "Femenino";
    } ?></td>
                <td><?php echo $row['carrera']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

</body>
</html>

<?php
mysqli_close($conn);
?>

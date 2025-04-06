<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num_alumnos = isset($_POST["num_alumnos"]) ? (int)$_POST["num_alumnos"] : 0;

  
    $query = "SELECT codigo, carrera FROM carrera";
    $result = mysqli_query($conn, $query);
    $carreras = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Alumnos</title>
    <link rel="stylesheet" href="Styles.css">
</head>
<body>

<form action="insertar.php" method="post" enctype="multipart/form-data">
    <div class="contenedor_tabla"> 
        <table class="tabla_datos">
            <thead>
                <tr>
                    <th></th>
                    <th>Fotografía</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>CU</th>
                    <th>Sexo</th>
                    <th>Carrera</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= $num_alumnos; $i++): ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><input type="file" name="foto_<?php echo $i; ?>" accept="image/*" required></td>
                        <td><input type="text" name="nombre_<?php echo $i; ?>" required></td>
                        <td><input type="text" name="apellido_<?php echo $i; ?>" required></td>
                        <td><input type="text" name="cu_<?php echo $i; ?>" maxlength="5" required></td>
                        <td>
                            <input type="radio" name="sexo_<?php echo $i; ?>" value="M" required> Masculino
                            <input type="radio" name="sexo_<?php echo $i; ?>" value="F" required> Femenino
                        </td>
                        <td>
                            <select name="carrera_<?php echo $i; ?>" required>
                                <?php foreach ($carreras as $carrera): ?>
                                    <option value="<?php echo $carrera['codigo']; ?>"><?php echo $carrera['carrera']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>

        <br>
        <button type="submit" class="boton_2_1">Insertar</button>
        <button type="reset" class="boton_2_2">Borrar</button>
    </div> 
</form>



</body>
</html>

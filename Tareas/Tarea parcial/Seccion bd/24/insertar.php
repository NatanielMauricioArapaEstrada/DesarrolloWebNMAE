<?php
include "conexion.php";

$insercion_exitosa = true; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num_alumnos = count($_POST) / 5; 
    
    for ($i = 1; $i <= $num_alumnos; $i++) {
        
        if (isset($_FILES["foto_$i"]) && $_FILES["foto_$i"]["error"] == 0) {
            $foto_nombre = $_FILES["foto_$i"]["name"];
            $foto_tmp = $_FILES["foto_$i"]["tmp_name"];
            $foto_destino = "img/" . basename($foto_nombre);
            
            if (move_uploaded_file($foto_tmp, $foto_destino)) {
                
                $nombre = $_POST["nombre_$i"];
                $apellido = $_POST["apellido_$i"];
                $cu =$_POST["cu_$i"];
                $sexo =$_POST["sexo_$i"];
                $codigocarrera = (int)$_POST["carrera_$i"];

                
                $sql = "INSERT INTO alumnos (fotografia, nombres, apellidos, cu, sexo, codigocarrera) 
                        VALUES ('$foto_destino', '$nombre', '$apellido', '$cu', '$sexo', $codigocarrera)";
                
                if (!mysqli_query($conn, $sql)) {
                    echo "Error al insertar el alumno $i: " . mysqli_error($conn) . "<br>";
                    $insercion_exitosa = false;
                }
            } else {
                echo "Error al subir la foto para el alumno $i.<br>";
                $insercion_exitosa = false;
            }
        } else {
            echo "No se subió una imagen válida para el alumno $i.<br>";
            $insercion_exitosa = false;
        }
    }

    if ($insercion_exitosa) {
        echo "Inserción completada correctamente. Redirigiendo...";
        header("refresh:2;url=read.php");
    } else {
        echo "Hubo errores en la inserción. Redirigiendo...";
        header("refresh:2;url=Fdatos.php"); 
    }

    mysqli_close($conn);
}
?>

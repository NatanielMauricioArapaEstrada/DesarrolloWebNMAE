<?php
include("claseItem.php");


$item = $_POST['item'];
$color = $_POST['color'];
$color_fondo = $_POST['color_fondo'];


if (isset($_FILES['imagen'])) {
    $nombre_imagen = $_FILES['imagen']['name'];
    $tmp = $_FILES['imagen']['tmp_name'];
    $ruta = "uploads/" . $nombre_imagen;
    move_uploaded_file($tmp, $ruta);
} else {
    
    $ruta = $_POST['imagen'];
}


$obj = new ItemVisual($item, $color, $color_fondo, $ruta);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú Visual</title>
</head>
<body>
    <h2>¿Cómo deseas mostrar el ítem?</h2>

    
    <form method="post">
        <input type="hidden" name="item" value="<?php echo $item; ?>">
        <input type="hidden" name="color" value="<?php echo $color; ?>">
        <input type="hidden" name="color_fondo" value="<?php echo $color_fondo; ?>">
        <input type="hidden" name="imagen" value="<?php echo $ruta; ?>">

        <button type="submit" name="accion" value="cuadrado">Mostrar Cuadrado</button>
        <button type="submit" name="accion" value="diagonal">Mostrar Diagonal</button>
    </form>

    <br>

    <?php
    if (isset($_POST['accion'])) {
        if ($_POST['accion'] == 'cuadrado') {
            $obj->mostrarCuadrado();
        } elseif ($_POST['accion'] == 'diagonal') {
            $obj->mostrarDiagonal();
        }
    }
    ?>
</body>
</html>

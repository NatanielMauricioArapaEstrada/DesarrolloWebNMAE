<?php
include("conexion.php");

$sql="SELECT id, imagen FROM libros ";
$resultado=$con->query($sql);


 while($row=mysqli_fetch_array($resultado)){
    ?>
    <button  onclick="cargarPortada(<?php echo $row['id']?>)"><img src="images/<?php echo $row['imagen'];  ?>"  style=" width=50px; heigth=100px;";></button>
    <?php } ?>
 <script src="scrypts.js"></script>
<link rel="stylesheet" href="estilos.css">


<div id="myModal" class="modal">
        <div class="modal-content">
            
            <div id="data">
              
            </div>
             <button class="close" onclick="cerrarModal()">Aceptar</button>
        </div>
    </div>

<script src="scrypts"></script>
<link rel="stylesheet" href="estilos.css">
    
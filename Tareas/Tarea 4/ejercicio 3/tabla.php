<?php

$filas = $_POST['filas'];
$columnas = $_POST['columnas'];


echo "<table style='border-collapse: collapse; border: 1px solid black; text-align: center;'>";


echo "<tr style='background-color: #f0f0f0; font-weight: bold;'>";
echo "<td style='border: 1px solid black;'></td>";
for ($c = 1; $c <= $columnas; $c++) {
    echo "<td style='border: 1px solid black;'>$c</td>"; 
}
echo "</tr>";


for ($i = 1; $i <= $filas; $i++) {
    echo "<tr>";
    

    echo "<td style='background-color: #f0f0f0; font-weight: bold; border: 1px solid black;'>$i</td>";
    
    // Generar las celdas con los resultados de la multiplicación
    for ($j = 1; $j <= $columnas; $j++) {
        $resultado = $i * $j;
        echo "<td style='border: 1px solid black;'>$resultado</td>";
    }
    echo "</tr>";
}

echo "</table>";
echo "<a href='formtabla.html'>Volver</a>";
?>
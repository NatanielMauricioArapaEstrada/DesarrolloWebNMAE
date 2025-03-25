<html>
<head>
<title>Ejemplo de PHP</title>
</head>
<body>

<BR><BR>
<?php
$columnas = 7;
$filas = 3;
for($i=0; $i < $columnas; $i++)
{

for($j=0; $j < $filas; $j++)
{

$matriz[$i][$j] = $i * $j;

}

}
?>
</body>
</html>
<?php
$galleta = "visitas";

if (isset($_COOKIE[$galleta])) {
    $visitas = $_COOKIE[$galleta] + 1;
} else {
    $visitas = 1;
}

setcookie($galleta, $visitas, $expired =0,  "/");

echo $visitas;
?>

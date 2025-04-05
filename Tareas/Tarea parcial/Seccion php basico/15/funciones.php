<?php
function fibonaci($n) {
    if ($n <= 0) return 0;
    if ($n == 1) return 1;

    $a = 0;
    $b = 1;
    $suma = $a + $b;

    for ($i = 2; $i <= $n; $i++) {
        $c = $a + $b;
        $suma += $c;
        $a = $b;
        $b = $c;
    }

    return $suma;
}
?>

<?php

$numero1 = 100;
$numero2 = 999;

function somaDiv($num)
{
    $soma = 0;
    for ($n = 1; $n < $num; $n++) {
        if ($num % $n == 0) {
            $soma += $n;
        }
    }
    echo "$soma";
}



if (somaDiv($numero1) == $numero2 & somaDiv($numero2) == $numero1) {
    echo "eles são amigos.";
} else {
    echo "eles não são amigos";
}

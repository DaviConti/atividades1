<?php
function exibirDivisores($num)
{
    if ($num <= 0) {
        echo "Por favor insira um número inteiro positivo.";
        return;
    }

    echo "Divisores de $num: ";
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            echo $i;
        }
    }
    echo "";
}

$numero1 = 10;
exibirDivisores($numero1);

$numero2 = 12;
exibirDivisores($numero2);

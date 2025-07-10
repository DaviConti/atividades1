<?php

$numero = 77;
$quantidade = contarPares($numero);
echo "Existem $quantidade números pares entre 1 e $numero.";

function contarPares($numero)
{
    $contador = 0;
    for ($i = 2; $i <= $numero; $i += 2) {
        $contador++;
    }
    return $contador;
}

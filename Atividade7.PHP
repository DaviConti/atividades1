<?php
function numeroPerfeito($numero) {
  if ($numero <= 1) {
    return false;
  }

  $soma = 1;
  for ($i = 2; $i <= sqrt($numero); $i++) {
    if ($numero % $i == 0) {
      $soma += $i;
      if ($i * $i != $numero) {
        $soma += $numero / $i;
      }
    }
  }

  return $soma == $numero;
}

$testnumero = 28;
if (numeroPerfeito($testnumero)) {
  echo $testnumero . " é um numero perfeito.";
} else {
  echo $testnumero . " não é um numero perfeito.";
}

?>
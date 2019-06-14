<?php

// Crie uma função que realize a conversão de Polegadas (pol) para Centímetros (cm),
// onde pol é passado como parâmetro e cm é retornado. Sabe-se que 1 polegada tem
// 2.54 centímetros. Crie também um programa para testar tal função.

function conversao ($pol) {

    $cm = $pol * 2.54;

    $msg = $cm . "cm";

    return $msg;
}

print "Digite a quantidade de polegadas(pol) que você deseja transformar em centímetros(cm):";
$pol = (float) fgets (STDIN);

$msg = conversao ($pol);
print $msg;
<?php

// Faça uma função para converter uma temperatura em graus Fahrenheit para Celsius. A
// temperatura em Fahrenheit é o dado de entrada e a temperatura em Celsius é o dado
// de saída. Utilize a fórmula C = (F - 32) * 5/9 , onde F é a temperatura em Fahrenheit e
// C é a temperatura em Celsius.

//procedimento

function graus ($f) {

    $c = ($f - 32) * 5/9;
    print "$c";
}


print "Quantos graus Fahrenheit você deseja passar para Celsius?";
$f = (float) fgets (STDIN);

graus ($f);



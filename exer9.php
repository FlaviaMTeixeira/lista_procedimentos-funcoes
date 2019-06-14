<?php
// Escreva uma função que receba dois números inteiros x e y. Essa função deve
// verificar se x é divisível por y. No caso positivo, a função deve retornar 1, caso
// contrário zero.Escreva também um programa para testar tal função. 

function divisivel ($x, $y) {

    $resto = $x % $y;

    if ($resto == 0) {

        print "1";
    }else {
        print "Zero";
    }


}

print "Digite o valor x:";
$x = (float) fgets (STDIN);

print "Digite o valor y:";
$y = (float) fgets (STDIN);

divisivel ($x, $y);
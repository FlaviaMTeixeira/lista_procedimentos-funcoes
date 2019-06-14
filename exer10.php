<?php

// Criar uma função que calcule e retorne o MAIOR entre dois valores recebidos como
// parâmetros. Um algoritmo para testar tal função deve ser criado.

function maior ($num1, $num2) {

    if ($num1 > $num2) {

        $msg = "Maior número:" . $num1;
    }elseif ($num2 > $num1) {
        $msg = "Maior número:" . $num2;
    }
 return $msg;
}

print "Digite um número:";
$num1 = fgets (STDIN);

print "Digite outro número:";
$num2 = fgets (STDIN);

$msg = maior ($num1, $num2);
print $msg;
<?php

// Escreva uma função que recebe 2 números inteiros n1 e n2 como entrada e retorna a
// soma de todos os números inteiros contidos nointervalo [ n1 , n2 ]. Use esta função em
// um programa que lê n1 e n2 do usuário e imprime a soma.



function intervalo($num1, $num2) {
    $intervalo = 0;

    if ($num1 < $num2) {

        for ($i=$num1; $i <= $num2; $i++) { 

            $intervalo = $intervalo + $i;            
            
            
        }

    print "A soma do intervalo é:" . $intervalo;
    }else {
        for ($i = $num2; $i <= $num1 ; $i++) {
            
            $intervalo = $intervalo + $i;

            
            
        }
    print "A soma do intervalo é:" . $intervalo;
    }
}

    print "Digite um número:";
    $num1 =(int) fgets (STDIN);
 
    print "Digite outro número:";
    $num2 = (int) fgets (STDIN);
 
intervalo($num1, $num2);

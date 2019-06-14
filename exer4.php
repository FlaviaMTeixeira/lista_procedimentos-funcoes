<?php

    // Faça um programa que leia a altura e o sexo (codificado da seguinte forma:
    // 1-feminino 2-masculino) de uma pessoa. Depois faça uma função chamada pesoideal
    // que receba a altura e o sexo via parâmetro e que calcule e retorne seu peso ideal,
    // utilizando as seguintes fórmulas:
    // • para homens: (72.7 * h) – 58
    // • para mulheres: (62.1 * h) – 44.7
    // Observação: Altura = h (na fórmula acima).


function peso_ideal ($sexo, $altura) {

    if ($sexo == 1) {

        $peso = ((62.1 * $altura) - 44.7);
    }else {
        $peso = ((72.7 * $altura) - 58);
    }

    return $peso;
}


    print "Sexo ( 1 - Feminino, 2 - Masculino):";
    $sexo = (int) fgets (STDIN);

    print "Digite sua altura:";
    $altura = (float) fgets (STDIN);

    $peso = peso_ideal ($sexo, $altura);

    print "Seu peso ideal é $peso";
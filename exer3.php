<?php

// Escreva um programa para ler as notas das duas avaliações de um aluno no semestre.
// Faça uma função que receba as duas notas por parâmetro e calcule e escreva a média
// semestral e a mensagem “ PARABÉNS! Você foi aprovado! ” somente se o aluno foi
// aprovado (considere 6.0 a média mínima para aprovação).


function media ($nota1, $nota2) {

    $media = ($nota1 + $nota2) / 2;

    if ($media > 6) {

        $msg =  "PARABÉNS! Você foi aprovado! Sua média foi: $media";
    } else {

        $msg = "Sua média foi: $media";
    }

    return $msg;

}


print "Digite a nota da primeira avaliação:";
$nota1 = (float) fgets (STDIN);

print "Digite a nota da segunda avaliação:";
$nota2 = (float) fgets (STDIN);

$msg = media ($nota1, $nota2);

print "$msg";

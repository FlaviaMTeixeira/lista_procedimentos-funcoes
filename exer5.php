<?php 

// Escreva um programa para ler o número de lados de um polígono regular e a medida
// do lado (em cm). Faça uma função que receba como parâmetro o número de lados e
// a medida do lado deste polígono e calcule e imprima o seguinte:
// • Se o número de lados for igual a 3, escrever TRIÂNGULO e o valor do seu
// perímetro.
// • Se o número de lados for igual a 4, escrever QUADRADO e o valor da sua área.
// • Se o número de lados for igual a 5, escrever PENTÁGONO.
// Observação: Considere que o usuário só informará os valores 3, 4 ou 5.


function poligono ($num_lados) {

    if ($num_lados == 3) {

        print "Digite um lado:";
        $lado1 = (float) fgets (STDIN);

        print "Digite mais um lado:";
        $lado2 = (float) fgets (STDIN);

        print "Digite o último lado:";
        $lado3 = (float) fgets (STDIN);

        $perimetro = $lado1 + $lado2 + $lado3;

        print "Triângulo \n" . "perímetro: $perimetro";


    }elseif ($num_lados == 4){

        print "Digite o tamanho de um dos lados:";
        $lado = fgets (STDIN);

        $area = $lado**2;

        print "Quadrado \n" . "Área:" . $area;
    }else {
        print "Pentágono";
    }
}


print "Digite o número de lados do polígono (somente de 3 a 5):";
$num_lados = (int) fgets (STDIN);

poligono ($num_lados);
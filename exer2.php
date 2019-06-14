<?php

// Faça uma função que calcule a hipotenusa. Os catetos são os dados de entrada e a
// hipotenusa é o dado de saída.
// hipotenusa = catetoA 2 + catetoB 2


function hipotenusa ($cat_a, $cat_b) {

    $hip = sqrt (($cat_a ** 2) + ($cat_b ** 2));
    print "Hipotenusa: $hip";
}


print "Digite o valor do cateto A:";
$cat_a = (float) fgets (STDIN);

print "Digite o valor do cateto B:";
$cat_b = (float) fgets (STDIN);

hipotenusa ($cat_a, $cat_b);
<?php

// Escreva uma função que receba um número natural e imprima os três primeiros
// caracteres do $dia da semana correspondente ao número. Por exemplo, 7 corresponde
// a “SAB”. O procedimento deve mostrar uma mensagem de erro caso o número
// recebido não corresponda a um $dia da semana. Gere também um programa que
// utilize essa função, chamando-a, mas antes lendo um valor para passagem de
// parâmetro.


//Função

function dia_num ($dia) {

    if ($dia == 1) {

    $msg = "Dom \n";
    }
        elseif ($dia == 2) {

        $msg = "Seg \n";
    }
            elseif ($dia == 3) {

            $msg = "Ter \n";
    }
                elseif ($dia == 4) {

                $msg = "Qua \n";
    }
                    elseif ($dia == 5) {

                    $msg = "Qui \n";
    }
                        elseif ($dia == 6) {

                        $msg = "Sex \n";
    }                       
                            elseif ($dia == 7) {

                            $msg = "Sab \n";
    }
                                else {
                                print "Erro! \n";
    }

    return $msg;
}

print "Digite um número natural:";
$dia = fgets (STDIN);

$msg = dia_num ($dia);

print $msg ;


//Procedimento

function dia_p ($dia) {

    if ($dia == 1) {

    print "Dom \n";
    }
        elseif ($dia == 2) {

        print "Seg \n";
    }
            elseif ($dia == 3) {

            print "Ter \n";
    }
                elseif ($dia == 4) {

                print "Qua \n";
    }
                    elseif ($dia == 5) {

                    print "Qui \n";
    }
                        elseif ($dia == 6) {

                        print "Sex \n";
    }                       
                            elseif ($dia == 7) {

                            print "Sab \n";
    }
                            else {
                            print "Erro! \n";
}

}

print "Digite um número natural:";
$dia = fgets (STDIN);

dia_p ($dia);
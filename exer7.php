<?php

// Escreva uma função que receba um número inteiro e imprima o mês correspondente
// ao número. Por exemplo, 2 corresponde a “ fevereiro ”. O procedimento deve mostrar
// uma mensagem de erro caso o número recebido não faça sentido. Gere também um
// programa que leia um valor e chame a função criada.



function mes_ano ($mes) {

    if ($mes == 1) {

    $msg = "Janeiro \n";
    }
        elseif ($mes == 2) {

        $msg = "Fevereiro \n";
    }
            elseif ($mes == 3) {

            $msg = "Março \n";
    }
                elseif ($mes == 4) {

                $msg = "Abril \n";
    }
                    elseif ($mes == 5) {

                    $msg = "Maio \n";
    }
                        elseif ($mes == 6) {

                        $msg = "Junho \n";
    }                       
                            elseif ($mes == 7) {

                            $msg = "Julho \n";
    }
                                elseif ($mes == 8) {

                                $msg = "Agosto \n";
    }
                                    elseif ($mes == 9) {

                                    $msg = "Setembro \n";
    }
                                        elseif ($mes == 10) {

                                        $msg = "Outubro \n";
    }
                                            elseif ($mes == 11) {

                                            $msg = "Novembro \n";
    }
                                                elseif ($mes == 12) {

                                                $msg = "Dezembro \n";
    }

    return $msg;
}

print "Digite um número que corresponda a algum mês do ano:";
$mes = (int) fgets (STDIN);

$msg = mes_ano_p ($mes);

print $msg ;


//Procedimento


function mes_ano_p ($mes) {

    if ($mes == 1) {

    print "Janeiro \n";
    }
        elseif ($mes == 2) {

        print "Fevereiro \n";
    }
            elseif ($mes == 3) {

            print "Março \n";
    }
                elseif ($mes == 4) {

                print "Abril \n";
    }
                    elseif ($mes == 5) {

                    print "Maio \n";
    }
                        elseif ($mes == 6) {

                        print "Junho \n";
    }                       
                            elseif ($mes == 7) {

                            print "Julho \n";
    }
                                elseif ($mes == 8) {

                                print "Agosto \n";
    }
                                    elseif ($mes == 9) {

                                    print "Setembro \n";
    }
                                        elseif ($mes == 10) {

                                        print "Outubro \n";
    }
                                            elseif ($mes == 11) {

                                            print "Novembro \n";
    }
                                                elseif ($mes == 12) {

                                                print "Dezembro \n";
    }

}

print "Digite um número que corresponda a algum mês do ano:";
$mes = (int) fgets (STDIN);

mes_ano_p ($mes);
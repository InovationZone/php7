<?php
//while executa enquanto for verdadeiro


while(true) {
    $n = rand(1,10); //gera um numero randômico
    if($n == 6) {
        echo "igual a 6";
        break;

    }

    echo $n;
}



<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 03/11/2018
 * Time: 12:41
 */


//uma varíavel declarada fora do escopo da funcao, mantem o mesmo valor, mesmo se for modoficada dentro dela
//varivel é diferente de parâmetro da funcao


$a = 10;

function trocarValor($a){
    $a = 50;

    return $a;
}

//continua sendo 10
echo $a;

//valor alterado para 50
echo trocarValor($a);


//neste caso o valor é acessado o endereço de memória da varívael e o valor dela é alterado
function trocarValorPorReferencia(&$a){
    $a = 50;

    return $a;
}

echo "</br>";

//o valor da variavel é trocado nesse caso
trocarValorPorReferencia($a);
echo $a;

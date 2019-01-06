<?php

//atribuicao
$nome = "João";
$sobrenome = "Ferreira";

//composto
//esta sendo atribuito mais um valor, concateado a variavel nome
$nome .= " Paulo";
$sobrenome .= " da Silva";


$valorTotal = 0;
$valorTotal += 100;

echo $valorTotal  . "</br>" ;

$valorTotal2 = 100;
$valorTotal2 -= 10;

echo $valorTotal2  . "</br>" ;


$valorTotal3 = 100;
$valorTotal3 *= 10;

echo $valorTotal3  . "</br>" ;


$valorTotal4 = 100;
$valorTotal4 /= 10;

echo $valorTotal4   . "</br>" ;







//concatenacao
$nomeCompleto = $nome .  ' ' . $sobrenome;




echo $nomeCompleto;
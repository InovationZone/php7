<?php

$a = 1.00;
$b = 2;

var_dump($a > $b); //false
var_dump($a < $b); //true
var_dump($a == $b); //false

//operador identico - verifica se o valor e o tipo das variáveis são os mesmos.
var_dump($a  === $b); //false


var_dump($a  != $b); //true

//diferente identico
var_dump($a  !== $b); //false


//operador spaceship
//se a for maior traz 1, se for igual traz 0 e se for menor -1
var_dump($a <=> $b);

//null coalesce

$c = null;
echo $c ?? 'nulo'; //se nao tiver valor, imprime a palavra nulo;

$d = null;
$e = null;
$f = 1;


echo $d ?? $e ?? $f; //ira imprmir o f
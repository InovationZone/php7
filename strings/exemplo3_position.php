<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 13/10/2018
 * Time: 11:35
 */

 $frase = 'abcdef mãe';

 //mostra a quantidade de posições até a palavra mãe
 $q = strpos($frase,'mãe');

 //pega o valor ate a palavra mae
 $texto = substr($frase,0,$q);

 //conta o total
$tamanho = strlen(($frase));

 var_dump($tamanho);
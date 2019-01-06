<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 27/10/2018
 * Time: 17:35
 */


//uma única dimensão - vetor
$frutas = array("laranja","abacaxi","morango");

//bidimensional
$carro[0][0] = "GM";
$carro[0][1] = "Cobalt";
$carro[0][1] = "Onix";

$carro[1][0] = "Peugeot";
$carro[1][1] = "207";
$carro[1][1] = "308";

print_r($carro[1]);
echo end($carro[0]); //traz o ultimo modelo de uma marca específica
//print_r($frutas);
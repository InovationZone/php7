<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 27/10/2018
 * Time: 16:50
 */

$meses  = array("jan", "fev", "mar" , "abril","jun","ago","set","out","nov","dez");


foreach ($meses as $index => $mes) {
    echo "</br>";
    echo $mes;
    echo "</br>";
    echo "</br>";
    echo $index; //imprime o índice do array
}
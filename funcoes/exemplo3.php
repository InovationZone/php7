<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 03/11/2018
 * Time: 12:59
 */

//recbe n parametros int

function soma(int ...$valores):string{ //modifica e retorna a soma em string - recurso do php7
    return array_sum($valores);
}


//imprime a soma de n valores
var_dump(soma(1,2,3));

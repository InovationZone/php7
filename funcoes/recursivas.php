<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 03/11/2018
 * Time: 13:05
 */

//quando a funcao chama a si mesma



function fatorial($numero){
    if($numero <= 1){
        return $numero;
    }else{
        return $numero * fatorial($numero - 1);
    }
}

echo fatorial(4);
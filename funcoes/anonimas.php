<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 03/11/2018
 * Time: 13:14
 */

function teste ($calback){

    //processo lento rodando

    $calback();

}


teste(function(){
    echo "terminou";
});


//recebendo resultado de uma funcao
$valor = function($a){
    var_dump($a);
};

echo "</br>";
$valor(1);
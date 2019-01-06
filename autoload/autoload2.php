<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 03/11/2018
 * Time: 22:03
 */

function incluirClasses($nomeClasse) {

    if(file_exists($nomeClasse.".php") == true){
        require_once ($nomeClasse.".php");
    }
}


//foram registrados os arquivos de autoload
spl_autoload_register("incluirClasses");
//nesse caso foram registrados os arquivos dentro da pasta abastratas
spl_autoload_register(function ($nomeClasse){
    if(file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php") == true){
        require_once ("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse. ".php");
    }
});


$carro = new Ferrari();

echo $carro->acelerar();
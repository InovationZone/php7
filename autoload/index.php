<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 03/11/2018
 * Time: 21:53
 */

function __autoload($nomeClasse){
    require_once ("$nomeClasse.php");
}

$ferrari = new Ferrari();

echo $ferrari->acelerar();
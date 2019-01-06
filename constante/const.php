<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 27/10/2018
 * Time: 18:01
 */

define("SERVIDOR",'127.0.0.1');

//constante com array

//true transforma a constante em case insensitive
//nao é boa prática usar com letras minusuclas
define('BANCO_DE_DADOS',
    [
        '127.0.0.1',
        'root',
        'passoword',
        'test',
    ],true
    );

print_r(BANCO_DE_DADOS);
echo"</br>";
echo SERVIDOR;
echo"</br>";

//constantes padrões do php
echo PHP_VERSION;
echo"</br>";
echo DIRECTORY_SEPARATOR; //traz a barra de separacao do S.O




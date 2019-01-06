<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 02/11/2018
 * Time: 23:37
 */

function salario(){
    return 946.00;
}

//parametro texto tem um valor default que deve ser substituido
function ola($periodo, $texto = "ola!"){
    return  "$texto $periodo";
}

echo "O seu salário é: " . salario()* 3;
echo "</br>";
echo Ola('Boa tarde!');

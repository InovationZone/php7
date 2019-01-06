<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 03/11/2018
 * Time: 15:00
 */

echo date("d/m/Y H:i:s");

echo "</br>";


//pega a quantidade de segundas a partir de 1970
echo time();


//aceita como segundo parametro um timestamp e irá exibir a hora fixa.
echo date("d/m/Y H:i:s", 1541264832);


echo "</br>";


//strtotime - converte um string para timestamp, aceita expressoes tambem
$ts = strtotime("2001/09/11");

//é possivel pegar qualquer informação de um timestamp
//a letra l pega o dia da semana
echo date("l , d/m/Y" , $ts);

echo date("d/m/Y",$ts);


$ts2 = strtotime('now'); //pega data atual
$ts3 = strtotime('+1 day'); //soma 1 dia da data atual
$ts4 = strtotime('+1 week'); //soma 1 semana da data atual

echo "</br>";

echo "</br>";

echo date("d/m/Y",$ts4);
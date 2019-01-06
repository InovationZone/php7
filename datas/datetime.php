<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 03/11/2018
 * Time: 16:07
 */

//classe datetime - facilita o trabalho com datas

$dt = new DateTime();



//consultar os tipos de formatacao na documentacao
//soma 15 dias
$periodo = new DateInterval("P15D");

//adiciona o intervalo
$dt->add($periodo);



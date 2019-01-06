<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 10/11/2018
 * Time: 16:11
 */


//definindo exibicao dos erros pelo php
//mostra todos os erros e não mostra os notices
error_reporting(E_ALL & ~E_NOTICE);

//provocando um erro
$nome = $_GET["nome"];

echo $nome;

echo "código executando";

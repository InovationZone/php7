<?php
//o include tem uma pasta padrão no php que mapeia os arquivos que estão lá. O include lança um warning de erro
//include não é seguro, é possível fazer inject de scripts através dele.

//include "funcoes/funcoes.php";
//o require verifica se o arquivo existe e se ele não tem erros. A aplicação é encerrada em caso de erros

//once - trás apenas uma vez,isso previne erros de importar duas vezes o mesmo conteúdo.
require "funcoes/funcoes.php";


$a = 10;
$b = 20;
$total = somar($a ,$b);

var_dump($total);
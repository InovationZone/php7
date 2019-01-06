<?php
//super global - acessa a partir de qualquer ponto


//principais variaveis

//informacoes vindas por get e post sempre vem como tipo string
//caso necessario converter é necessario fazer um cast  (int) $variavel
$idade = (int)$_GET['idade'];
//var_dump($idade);
$nome = $_GET['nome']; //valor obtido a partir dos parametros passados na url - Query string
$sobreome = $_POST['teste']; //valor obtido a parte do parametro passado url

//exemplo query string -> ?idade=23&nome=joao
//url - uniform resource locator - oonjunto de info para ir para um determinado local
//uri  i de identifier - partes da url ex: trecho http

$ip = $_SERVER["REMOTE_ADDR"]; //pega o ip do usuario
$script = $_SERVER["SCRIPT_NAME"]; //pega o nome do arquivo e o caminho
$script2 = $_SERVER["SCRIPT_FILENAME"]; //pega o nome do arquivo e o caminho completo
var_dump($script);






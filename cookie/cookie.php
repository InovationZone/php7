<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 10/11/2018
 * Time: 13:44
 */

//cookie se torna necessário para informações persistentes, que precisam ficar um tempo armazenadas
//se o computador for desligado, as inforamções ainda estarão lá, se estiverem dentro do tempo pré-definido.
//ex: adicionando um produto no carrinho, sem estar logado

$data = array(
    "nome" => 'João Paulo'
);

//criando o cookie
setcookie("COOKIE_NOME", json_encode($data) ,time() + 3600);

echo "OK";
<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 06/01/2019
 * Time: 13:07
 */

$data = [
    "nome" => "Joao"
];

//SECRET É A constante definida
//pack - converte uma string em 16 bits, porque a chave da funcao precisa de uma string de 16 bits
//a senha é a que consegue descriptografar
define('SECRET_IV', pack('a16', 'senha'));
define('SECRET', pack('a16', 'senha'));

$openssl = openssl_encrypt(
    json_encode($data),
    'AES-128-CBC',
    SECRET,
    0,
    SECRET_IV
);

//descriptografando, passando a string, o metodo, e a senha
$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0 , SECRET_IV );


var_dump($openssl);
var_dump($string);
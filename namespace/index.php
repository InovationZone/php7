<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 03/11/2018
 * Time: 22:40
 */

require_once "config.php";

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome('joao');
$cad->setEmail('joaopaulosil@yahoo.com.br');
$cad->setSenha('123');

echo $cad->registrarVenda();
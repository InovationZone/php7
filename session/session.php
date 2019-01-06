<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 27/10/2018
 * Time: 18:19
 */

require "config.php";
$_SESSION["nome"] = "joão";

//pode ser utilizado para segurança, onde na tela que processa o login, é possível gerar um novo id de sessao no servidor
session_regenerate_id(); //gera um novo id de sessao
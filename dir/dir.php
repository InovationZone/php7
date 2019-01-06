<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 04/11/2018
 * Time: 14:54
 */

$name = "images";

//verifica se o diretório existe
if(!is_dir($name)){
    mkdir($name);
    echo "Diretorio $name criado com sucesso!";
} else {
    //remove o diretorio
    //rmdir($name);
    echo "Já existe o diretório: $name. Foi removido!";
}
<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 04/11/2018
 * Time: 19:11
 */

$file = fopen("teste.txt","w+");

fclose($file);

//unlink exclui no arquivo
unlink('teste.txt');


echo "arquivo removido com sucesso!";


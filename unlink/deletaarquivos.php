<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 04/11/2018
 * Time: 19:14
 */


//so cria se nao existir o diretorio
if(!is_dir("images")) mkdir("images");


//deleta arquivo por aquivo dentro da pasta
foreach (scandir("images") as $item){
    if(!in_array($item,array(".",".."))){
        unlink("images/" .$item);
    }
}




<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 04/11/2018
 * Time: 20:32
 */

//movendo arquivos de pastas

//criando diretorios

$dir1 = "folder01";
$dir2 = "folder02";

if(!is_dir($dir1) && !is_dir($dir2)) {
    mkdir($dir1);
    mkdir($dir2);
}

$filename = "readme.txt";

if(!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) {
    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename,"w+");

    fwrite($file,date("Y-m-d"));
    fclose($file);
}


//movendo o arquivo da pasta 1 para  pasta 2
//para a mesma pasta, você estaria só renomeando o arquivo
rename($dir1 . DIRECTORY_SEPARATOR . $filename, $dir2 . DIRECTORY_SEPARATOR . $filename);
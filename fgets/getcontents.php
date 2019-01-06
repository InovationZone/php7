<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 04/11/2018
 * Time: 19:36
 */

$filename = "images/1.jpg";
//pega o conteudo do arquivo e converte pra b64
$base64 = base64_encode(file_get_contents($filename));

//pega o formato o arquivo dinamicamente
$fileInfo = new finfo(FILEINFO_MIME_TYPE);
$mimeType = $fileInfo->file($filename);


//padrao para exibir o conteudo
$base64Enconde =  "data:" .$mimeType. ";base64," . $base64;

?>

<a href="<?=$base64Enconde?>" target="_blank">link</a>

<img src="<?=$base64Enconde?>">

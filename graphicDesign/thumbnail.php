<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 15/11/2018
 * Time: 00:08
 */

//gerando thumbnail

header("Content-type: image".DIRECTORY_SEPARATOR."jpeg");

//pega a imagem
$file = "img/wallpaper.jpg";

$newWidth = 256;
$newHeight = 256;

//pega as informacoes do arquivo
$data = getimagesize($file);

$width = $data[0];
$height = $data[1];

//pegando as dimensoes da imagem
list($old_width , $old_height) = getimagesize($file);

$newImage = imagecreatetruecolor($newWidth,$newHeight);
$oldImage = imagecreatefromjpeg($file);

//parametros
//nova imagem
//imagem antiga
//de onge a imagem vai iniciar no eixo y
//de onge a imagem vai iniciar no eixo x
//os mesmos parametros para a imagem destino
//nova largura
//nova altura
imagecopyresampled($newImage,$oldImage,0,0,0,0,$newWidth,$newHeight,$old_width,$old_height);

//cria a imagem
imagejpeg($newImage);

//destroi
imagedestroy($oldImage);
imagedestroy($newImage);


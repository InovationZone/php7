<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 14/11/2018
 * Time: 23:21
 */

//biblioteca para edicao de imagens

//definindo o cabecalho com o tipo de resposta do arquivo
header("content-type: image/png");

//cria a imagem com a sua largura e altura
$image = imagecreate(256,256);


//definindo a cor da imagem em rgb
$black = imagecolorallocate($image, 0,0,0);
$red = imagecolorallocate($image,255,0,0);

//escrevendo na tela
imagestring($image,5,60,120,'curso de php 7', $red);

//informando o formato e renderizando a imagem
imagepng($image);

//destruindo a varíavel
imagedestroy($image);


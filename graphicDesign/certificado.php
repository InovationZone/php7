<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 14/11/2018
 * Time: 23:32
 */

//este exemplo escreve sobre uma imagem carregada



//carregando a imagem
$image = imagecreatefromjpeg("img/certificado.jpg");

//definindo as cores
$titleColor = imagecolorallocate($image,0,0,0);
$gray = imagecolorallocate($image,100,100,100);


imagestring($image,5,450,150,"CERTIFICADO", $titleColor);
imagestring($image,5,440,350,"Joao Paulo", $titleColor);
imagestring($image,3,440,370,"Concluido em: 14/11/2018", $titleColor);


header("Content-type: image/jpeg");

//gerando no navegador
imagejpeg($image);

//gerando um arquivo novo
imagejpeg($image, "certificado João Paulo.jpg",100);
imagedestroy($image);
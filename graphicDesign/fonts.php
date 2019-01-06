<?php

//exemplo com fontes modificadas que foram baixadas
$image = imagecreatefromjpeg("img/certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);


imagettftext($image, 32, 0, 300, 150, $titleColor, __DIR__ .DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.'Bevan'.DIRECTORY_SEPARATOR.'Bevan-Regular.ttf', "CERTIFICADO");

imagettftext($image, 32, 0, 320, 300, $titleColor, __DIR__ .DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.'Playball'.DIRECTORY_SEPARATOR.'Playball-Regular.ttf', "João Paulo");

imagettftext($image, 18, 0, 320, 350, $titleColor, __DIR__ .DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.'Playball'.DIRECTORY_SEPARATOR.'Playball-Regular.ttf', utf8_decode("Concluíu o curso de PHP 7"));


imagestring($image, 3, 320, 400, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

header("Content-type: image".DIRECTORY_SEPARATOR."jpeg");

imagejpeg($image);

imagedestroy($image)
?>
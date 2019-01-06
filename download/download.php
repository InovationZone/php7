<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 04/11/2018
 * Time: 20:18
 */


//faz download do arquivo
$link = "https://img1.ibxk.com.br/2017/07/13/13160112901226.jpg?w=700";


$content = file_get_contents($link);

//pega o valor da url
$parse = parse_url($link);

//pega o nome da imagem
$basename = basename($parse["path"]);

//cria o arquivo
$file = fopen($basename,"w+");
fwrite($file,$content);
fclose($file);

?>

<img src="<?=$basename?>">

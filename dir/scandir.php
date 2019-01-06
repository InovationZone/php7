<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 04/11/2018
 * Time: 15:01
 */

//lê o conteúdo dentro de um diretório
$images = scandir("images");

$data = array();

foreach ($images as $img){
    //in_array - busca dentro do array
    if(!in_array($img,array(".",".."))){
        $filename = "images" . DIRECTORY_SEPARATOR . $img;

        //pega informações do arquivo
        $info = pathinfo($filename);

        //pega tamanho do arquivo
        $info["size"] = filesize($filename);
        //pega a última data de modificação
        $info["modified"] = date("d/m/Y H:i:s",filemtime($filename));
        //pega o caminho do arquivo
        $info["url"] = "http://localhost/php7/dir/" .str_replace("\\","/",$filename);

        array_push($data,$info);

    }
}

echo json_encode($data);
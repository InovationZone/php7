<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 04/11/2018
 * Time: 18:54
 */

require_once "config.php";

$sql = new Sql();

$tweet = $sql->select("select * from tweet");

$headers = array();

//pegando os nomes das colunas
foreach ($tweet[0] as $key => $value) {
    array_push($headers,ucfirst($key));
}

$file = fopen("tweets.csv", "w+");


//inclui uma virgula para cada array
fwrite($file,implode(",",$headers) . "\r\n");
//pegando os dados
foreach ($tweet as $key => $row) {
    $data = array();

    foreach ($row as $key => $value) {
        array_push($data,$value);
    } //foreach e coluna

    fwrite($file , implode(",",$data) . "\r\n");
} //foreach de linha

fclose($file);
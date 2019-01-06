<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 04/11/2018
 * Time: 19:21
 */

$filename = "tweets.csv";

if(file_exists($filename)) {

    //abrindo o arquivo em modo leitura
    $file = fopen($filename,"r");

    //pega so a primeira linha do arquivo
    $headers = explode(",",fgets($file));

    $data = array();

    while($row= fgets($file)){
        //separa o csv pelas vírgulas
        $rowData = explode(",",$row);
        $linha = array();

        for($i=0;$i < count($headers);$i++){
            $linha[$headers[$i]] = $rowData[$i];
        }

        array_push($data , $linha);
    }

    fclose($file);

    echo json_encode($data);
}
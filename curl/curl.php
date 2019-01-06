<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 04/11/2018
 * Time: 20:56
 */

//consumindo api de cep
$cep = "07051210";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

//ch contem a url
//CURLOPT_RETURNTRANSFER - Informa que espera um retorno
//1 - resposta de volta / 0 - não quer
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
//não valida se o ssl é válido, se essa opção nao for colocada, não irá funcionar o httpssN
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,01);

//executa
$response = curl_exec($ch);

//fecha a conexao
curl_close($ch);


$data = json_decode($response, true);


print_r($data);
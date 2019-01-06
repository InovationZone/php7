<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 04/11/2018
 * Time: 12:29
 */

require_once "conectadb.php";


//prepara a query
//nos values sao passados parametros
$stmt   = $conn->prepare(
        "INSERT INTO `tweet` (`id_usuario`, `tweet`) VALUES (:USUARIO, :TWEET)");


//passagem de parâmetros
$usuario = 1;
$tweet = 'Teste de tweet domingo';

$stmt->bindParam(':USUARIO',$usuario);
$stmt->bindParam(':TWEET',$tweet);

$stmt->execute();




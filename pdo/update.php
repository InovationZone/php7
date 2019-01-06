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
    "UPDATE `tweet` SET `tweet` = :TWEET WHERE id_tweet = :IDTWEET;");


//passagem de parâmetros
$idTweet = 14;
$tweet = 'Teste de tweet domingo';

$stmt->bindParam(':IDTWEET',$idTweet);
$stmt->bindParam(':TWEET',$tweet);

$stmt->execute();




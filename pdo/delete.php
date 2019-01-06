<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 04/11/2018
 * Time: 12:29
 */

require_once "conectadb.php";

//com transacao
$conn->begin_transaction();


//prepara a query
//nos values sao passados parametros
$stmt   = $conn->prepare(
    "DELETE FROM `tweet` WHERE `tweet`.`id_tweet` = :IDTWEET");


//passagem de parâmetros
$idTweet = 1;

$stmt->bindParam(':IDTWEET',$idTweet);

$stmt->execute();


$conn->commit();




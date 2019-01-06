<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 04/11/2018
 * Time: 00:16
 */

require_once "conectadb.php";


$stmt = $conn->prepare('select * from tweet');

$stmt->execute();


//faz o mesmo trabalho que o while faria

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($results);

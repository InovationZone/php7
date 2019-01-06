<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 03/11/2018
 * Time: 23:31
 */

$conn = mysqli_connect("localhost","root","","fgv");

if($conn->connect_error){
    echo "Error " . $conn->connect_error;
}


$stmt = $conn->prepare("query");

//values(? ,?)
//ss significa que serão passadas duas strigs
$stmt->bind_param("ss,$param1,$param2");

$param1 = "valor";
$param2 = "valor2";

//executa a query no bd
$stmt->execute();


//select
$result = $conn->query("select * from usuarios");

//fetch array verifica se veio resultados, se veio a linha da consulta
//é atribuido a variavel row
while($row = $result->fetch_array()) {

}

//fetch assoc trás só o nome da coluna do bd
//é atribuido a variavel row
while($row = $result->fetch_assoc()) {

}

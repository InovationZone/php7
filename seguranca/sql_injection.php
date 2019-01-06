<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 15/11/2018
 * Time: 12:05
 */


$id = (isset($_GET["id"])) ? $_GET["id"] : 1;

$conn = new mysqli("localhost",'root', 'admin','dbsistemaLaravel');

//quebrando o sql injection
if(!is_numeric($id) || strlen($id) > 5) {
    exit('falhou o injection rsrs');
}
$sql = "select * from pessoa where idpessoa = $id";
$exec = mysqli_query($conn, $sql);
while ($resultado = mysqli_fetch_object($exec)){
    $resultado->nome = utf8_encode($resultado->nome);
    print_r($resultado);
}
//url com sql injection
//http://localhost/cursos/seguranca-php/sql_injection.php?id=3 or 1=1 --
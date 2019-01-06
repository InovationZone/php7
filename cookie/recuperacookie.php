<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 10/11/2018
 * Time: 13:58
 */

if(isset($_COOKIE["COOKIE_NOME"])) {
    $obj = json_decode($_COOKIE["COOKIE_NOME"]);

    var_dump($obj);
}
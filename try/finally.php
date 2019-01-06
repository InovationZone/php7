<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 10/11/2018
 * Time: 15:42
 */

//o finally sempre será executado


try {
    echo "imprime esse </br>";
} catch (Exception $e) {

} finally {
    echo "finally - imprime também";
}
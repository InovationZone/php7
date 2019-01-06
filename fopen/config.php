<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 04/11/2018
 * Time: 13:59
 */

spl_autoload_register(function ($className){
    $filename = "class" . DIRECTORY_SEPARATOR . $className. ".php";

    if(file_exists($filename)){
        require_once ($filename);
    }
});
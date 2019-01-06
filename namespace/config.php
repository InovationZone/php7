<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 03/11/2018
 * Time: 22:32
 */

spl_autoload_register(function ($nameClass){
    $dirClass="Class";
    $filename = $dirClass .DIRECTORY_SEPARATOR . "$nameClass.php";

    if(file_exists($filename)){
        require_once ($filename);
    }
});
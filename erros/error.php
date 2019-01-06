<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 10/11/2018
 * Time: 15:50
 */

function error_handler($code , $message , $file, $line){

    echo json_encode(array(
        "code"=> $code,
        "message" => $message,
        "file" => $file,
        "line" => $line,
    ));
}

/*
 *
 * trecho do php ini que configura como serao mmostrados os erros
 * o ~ é uma negacao,por exemplo, não mostrar notices: ~E_NOTICE
 *
 * ; error_reporting
;   Default Value: E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED
;   Development Value: E_ALL
;   Production Value: E_ALL & ~E_DEPRECATED & ~E_STRICT

 *
 *
 *
 */

set_error_handler("error_handler");

echo 100 /0;




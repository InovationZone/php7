<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 10/11/2018
 * Time: 15:27
 */


try {
    //o código do erro ajuda para se localizar, pode ser gerada uma documentação
    throw new Exception("Houve um erro",400);

//o erro da classe Exception é jogado dentro da variável e
} catch (Exception $e){
    echo json_encode(array(
        "message" => $e->getMessage(),
        "line" => $e->getLine(),
        "file" => $e->getFile(),
        "code" => $e->getCode()
    ));
}



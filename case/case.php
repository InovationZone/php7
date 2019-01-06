<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 27/10/2018
 * Time: 15:51
 */

//usado quando sabemos as opcoes que viram e não precisaremos fazer comparacoes entre menor, diferente, por exemplo.

$diaSemana = date('w');

switch ($diaSemana){
    case 0:
        echo "domingo";
        break; //se nao for colocado, executa a debaixo.
    case 1:
        echo "segunda";
        break; //se nao for colocado, executa a debaixo.
    case 2:
        echo "terça";
        break; //se nao for colocado, executa a debaixo.
    case 3:
        echo "quarta";
        break; //se nao for colocado, executa a debaixo.
    case 4:
        echo "quinta";
        break; //se nao for colocado, executa a debaixo.
    case 5:
        echo "sexta";
        break; //se nao for colocado, executa a debaixo.
    case 6:
        echo "sabado";
        break; //se nao for colocado, executa a debaixo.


    default: echo 'nenhum dia encontrado';
}
<?php
$pessoas = array();

//adiciona um item ao array
array_push($pessoas, array(
    'nome'  => 'João',
    'idade' => '23'
));

array_push($pessoas, array(
    'nome'  => 'Paulo',
    'idade' => '22'
));

print_r($pessoas);
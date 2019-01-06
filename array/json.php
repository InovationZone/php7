<?php
$pessoas = array();

//adiciona um item ao array
array_push($pessoas, array(
    'nome'  => 'Joao',
    'idade' => '23'
));

array_push($pessoas, array(
    'nome'  => 'Paulo',
    'idade' => '22'
));

//tranformando em json
echo json_encode($pessoas);

//json decode
$json = '
[{"nome":"Joao","idade":"23"},{"nome":"Paulo","idade":"22"}]';


print_r(json_decode($json,true)); //sem o true, volta como objeto
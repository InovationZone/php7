<?php

$suaIdade = 23;
$crianca = 12;
$maior = 18;
$idoso = 65;

if($suaIdade <  $crianca){
    echo "crianca";
} else if($suaIdade < $maior) {
    echo "adolescente";
} else if($suaIdade < $idoso) {
    echo "adulto";
} else {
    echo "idoso";
}

//if ternario
echo "</br>";
echo ($suaIdade < $maior) ? "menor de idade" : "maior de idade";
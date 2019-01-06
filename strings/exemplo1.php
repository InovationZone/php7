<?php


$nome = "joao";

//imprime o valor da variável, sem a necessidade de concatenar
//echo "abc $nome </br>";

//entende que tudo é texto, entao imprime a variavel e nao o valor dela.
//echo 'abc $nome';

//funcoes para srings


$texto = "abcdef abcd";

//converte o texto para caixa alta
echo strtoupper($texto) ."</br>";

//muda para minusculo
echo strtolower($texto) ."</br>";

//so a primeira palavra com a primeira letra maiuscula

echo ucfirst($texto);
//cada palavra com a primeira letra maiscula;
echo  ucwords($texto);

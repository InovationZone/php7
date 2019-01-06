<?php
//executa sempre a primeira vez, independente se a condicao for verdadeiro

$total = 100;
$desconto = 0.9;
do {
    $total *= $desconto;
} while($total > 100);

echo $desconto;
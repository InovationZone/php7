<?php
    $nome = "João Paulo";

    unset($nome); //paga o valor da variavel

    if(isset($nome)){
        echo $nome;
    } else {
      //  echo "variavel nome nao definida";
    }

    //echo "$nome";

    //vai mostrar o tipo de dado, tamanho gasto e o valor
    //var_dump($nome);


    //Existem 8 tipos de dados primitivos  em php divididos em 3 grupos

    //tipos básicos
    $nome = "João Paulo"; //string
    $ano = 1995;  //inteiro
    $salario = 5000.00; //float
    $bloqueado = false; //booleana

    //tipos compostos  - arrays e objetos
    $frutas = array('abacaxi', 'laranja' , 'manga'); //array
    //echo $frutas[2];
    $nascimento = new DateTime(); //objeto
    //var_dump($nascimento);
    //ctrl + u - formata a exibicao do conteudo no navegador


    //tipos especiais - resources e null
    $arquivo = fopen('exemplo1_atribuicao.php' , 'r'); //resources - análogos a objetos onde funções retornando resources seriam construtores de objetos e funções manipulando através do recurso seriam como métodos destes objetos.
    //var_dump($arquivo);
    $nulo = null; //nulo, ausencia de valor / vaxio - existe, sem nada preenchido  / vazio - já gerou espaço na memoria





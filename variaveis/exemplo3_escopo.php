<?php

//variavel comum existe somente no arquivo que foi criado
//variaveis super globais, como $_GET, podem ser chamadas de qualquer local

//escopo global
$nome = "João";


function teste(){
    //escopo da funccao2

    echo $nome; //isso retorna um erro, pois a variavel nome nao existe dentro desse escopo;

}


function teste2(){
    //escopo da funccao 2

    global $nome; //informei que desejo usar nome dentro desse escopo, isso funciona.
    echo $nome;

}
<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 03/11/2018
 * Time: 23:02
 */

namespace Cliente;

class Cadastro extends \Cadastro
{
    public function registrarVenda(){
        return "foi realizada uma venda para o cliente " . $this->getNome();
    }
}
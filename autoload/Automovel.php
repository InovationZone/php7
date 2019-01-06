<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 03/11/2018
 * Time: 21:37
 */

abstract class Automovel implements VeiculoInterface
{
    public function acelerar(){
        return "Automóvel acelerando";
    }
}
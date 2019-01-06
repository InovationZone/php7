<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 04/11/2018
 * Time: 13:10
 */

class Sql extends PDO
{
    private $conn;

    /**
     * Sql constructor.
     */

    //no construtor da classe já é feita a conexão com o bd
    public function __construct()
    {
        $this->conn = new PDO("mysql:dbname=twitter_clone;host=localhost","root", "");
    }



    //recebe a query e usa os outros metodos para passar os parametros e executa
    public function query($rawquery, $params = array()){
        $stmt = $this->conn->prepare($rawquery);

        $this->setParams($stmt,$params);

        $stmt->execute();

        return $stmt;

    }

    //seta os parãmetros da query
    private function setParams($statment, $parameters = array()){
        foreach ($parameters as $key => $value){
            $this->setParam($statment,$key,$value);
        }
    }

    //seta um único parâmetro
    private function setParam($statment, $key , $value){
         $statment->bindParam($key,$value);

    }

    //retorna uma query select
    public function select($rawQuery, $params = array()):array{
       $stmt = $this->query($rawQuery,$params);

       return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

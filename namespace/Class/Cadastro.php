<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 03/11/2018
 * Time: 22:36
 */

class Cadastro
{
    private $nome;
    private $email;
    private $senha;

    /**
     * @return mixed
     */
    public function getNome():string
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail():string
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha():string
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    //transforma em string automaticamente ao dar um echo
    public function __toString()
    {
       return json_encode(array(
           "nome" => $this->getNome(),
           "email" => $this->getEmail(),
           "senha" => $this->getSenha()
       ));
    }


}
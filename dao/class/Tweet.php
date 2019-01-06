<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 04/11/2018
 * Time: 14:12
 */

class Tweet
{
    private $idTweet;
    private $idUsuario;
    private $tweet;
    private $dataInclusao;

    /**
     * @return mixed
     */
    public function getIdTweet()
    {
        return $this->idTweet;
    }

    /**
     * @param mixed $idTweet
     */
    public function setIdTweet($idTweet)
    {
        $this->idTweet = $idTweet;
    }

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @param mixed $idUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    /**
     * @return mixed
     */
    public function getTweet()
    {
        return $this->tweet;
    }

    /**
     * @param mixed $tweet
     */
    public function setTweet($tweet)
    {
        $this->tweet = $tweet;
    }

    /**
     * @return mixed
     */
    public function getDataInclusao()
    {
        return $this->dataInclusao;
    }

    /**
     * @param mixed $dataInclusao
     */
    public function setDataInclusao($dataInclusao)
    {
        $this->dataInclusao = $dataInclusao;
    }


    //retorna um registro por id
    public function loadById($id){
        $sql = new Sql();

        $results = $sql->select("select * from tweet where id_tweet = :ID", array(
            ":ID"=>$id
        ));

        if(count($results) > 0) {
            $row = $results[0];

            $this->setIdTweet($row['id_tweet']);
            $this->setIdUsuario($row['id_usuario']);
            $this->setTweet($row['tweet']);
            $this->setDataInclusao($row['data_inclusao']);
        }
    }

    public static function getList(){
        $sql = new Sql();

        return $sql->select("select * from tweet");
    }


    public function __toString()
    {
        // TODO: Implement __toString() method.
        return json_encode(array(
            "id_tweet"      => $this->getIdTweet(),
            "id_usuario"    => $this->getIdUsuario(),
            "tweet"         => $this->getTweet(),
            "data_inclusao" => $this->getDataInclusao()

        ));
    }
}
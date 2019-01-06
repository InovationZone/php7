<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 06/01/2019
 * Time: 13:32
 */

session_start();

//depois de verificar o login e senha, reinicie o id da sessão
session_regenerate_id();

echo session_id();
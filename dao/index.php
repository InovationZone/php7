<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 04/11/2018
 * Time: 14:02
 */

require_once "config.php";


/*traz por id
$tweets = new Tweet();
$tweets->loadById(2);
echo $tweets;*/

$lista = Tweet::getList();

echo json_encode($lista);
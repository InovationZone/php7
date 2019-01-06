<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 15/11/2018
 * Time: 11:47
 */

if($_SERVER["REQUEST_METHOD"] === 'POST'){

    //escapeshellcmd - funcao que identifica que foi passado algum comando diferente junto com o post e escapa(retira) ele.
    //

    $cmd = escapeshellcmd($_POST['cmd']);

    var_dump($cmd);

    echo "<pre>";
    //executando um command injetado pelo usuario
    $comando = system($cmd,$retorno);


    //o primeiro comando seria um exemplo do usuario e tem um and com o injection que para o xampp
    // dir c:\ && c:/xampp/xampp_stop.exe
    echo "</pre>";
}



?>

<form method="post">
    <input type="text" name="cmd">

    <input type="submit" value="enviar">

</form>

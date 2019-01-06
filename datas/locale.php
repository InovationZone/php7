<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 03/11/2018
 * Time: 15:54
 */


//lc all - seta todas as config de localizacao para portugues
//portuguese serve para o windows
setlocale(LC_ALL,"´pt-BR","pt_BR.utf-8","portuguese");

//formata a dara e pega as a primeira letra e deixa maiúscula.
echo ucwords(strftime("%A %B"));
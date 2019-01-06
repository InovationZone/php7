<?php
/**
 * Created by PhpStorm.
 * User: joaosilva
 * Date: 19/12/18
 * Time: 16:06
 */

$pasta = "arquivos";

//definir permissoes
$permissao = "0775";

if(!is_dir($pasta)) mkdir($pasta, $permissao);


echo "diretório criado com sucesso!";
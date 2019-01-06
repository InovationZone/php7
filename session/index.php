<?php
require "config.php";
print_r($_SESSION["nome"]);

unset($_SESSION['nome']);

//sem parametro de sessão nenhuma, apaga todas as sessões.
session_unset();

session_destroy();
/*no unset a variavel é limpa, mas você continua sendo a mesma pessoa. Já no destroy,
se a pagina for atualizada, é como se fosse um acesso novo.*/
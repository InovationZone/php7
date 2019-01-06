<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 04/11/2018
 * Time: 18:39
 */


//criando arquivos
//a funcao fopen espera 2 parâmetros: o caminho o arquivo e como você quer controlar, se quer que o conteúdo seja excluido,
//se vai ser criado um novo


//w+  - Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.
//a+ - nao deleta o conteudo do arquivo
$file = fopen("log.txt", "a+");

//escrevendo no arquivo
fwrite($file,'Incluindo conteúdo no arquivo');


//finalizando a escrita
fclose($file);


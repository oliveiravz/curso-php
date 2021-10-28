<div class="titulo">Include Once</div>

<?php

/**
 * Include ou require once, garante que o arquivo sera carregado someente uma vez
 */
ini_set('display_errors', 1);

include('include_once_arquivo.php');
// require('include_once_arquivo.php');

echo "Variável = '{$variavel}'<br>";
$variavel = 'Variavel Alterada';
echo "Variável = '{$variavel}'.<br>";

// Ao incluir novamente o arquivo, a variavel é redeclarada gerando um erro
include('include_once_arquivo.php');


/* 
 * Ao inserir function_exists no função do arquivo 'include_once_arquivo'
 * ela passa a ser reinicida toda as vezes que for invocada pelo include
 */ 
include('include_once_arquivo.php');
echo "Variável = '{$variavel}'<br>";
$variavel = 'Variável Alterada';
echo "Variável = '{$variavel}'<br>";
<div class="titulo">Error Handler</div>

<?php

// Para mostrar todos erros
ini_set('display_errors', 1);
// echo 4/0 . '<br>';


// Mostrar somemente errors e não warning
error_reporting(E_ERROR);
// echo 4/0 . '<br>';


//Mostrat todos os erros e warnings 
error_reporting(E_ALL);
// echo 4/0 . '<br>';
// include 'arquivo_inesxistente';

function filtrarMensagem($errno, $errstring) {
    // $text = 'include';
    $text = 'by zero';
    return !!stripos(" $errstring", $text);
}

set_error_handler('filtrarMensagem', E_WARNING);

echo '<br>';
echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

//Restaura todos os padrões de erros
restore_error_handler();

echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

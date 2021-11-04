<div class="titulo">Try/Catch</div>

<?php 

// echo 7 / 0;
// echo intdiv(7, 0);

//try catch é usado para previnir possíveis erros no código
try {
    echo intdiv(7, 0);
}catch(Error $e) { // Usado para erros mais graves
    echo 'Teve um erro aqui<br>';
}


// Os catches mais específicos antes dos mais genérico
try {
    throw new Exception('Um erro muito estranho');
    echo intdiv(7, 0);
}catch(DivisionByZeroError $e) {
    echo 'Divisão por  zero<br>';
}catch(Throwable $e) {
    echo 'Erro encontrado ' . $e->getMessage() . '<br>';
} finally {
    echo 'Sempre executando<br>';
}
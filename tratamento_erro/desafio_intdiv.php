<div class="titulo">Desafio intdiv</div>


<?php

include 'intdivnamespace.php';
use Aritmetica as ari;


try {
    echo ari\intdiv(8, 0);
}catch(ari\NaoInteiroException $e) {
    echo "Não é um número inteiro";
}catch(DivisionByZeroError $e) {
    echo 'Divisão por zero';
}
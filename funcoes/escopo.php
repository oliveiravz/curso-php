<div class="titulo">Função & Escopo</div>


<?php

function imprimirMensagens(){
    echo "olá<br>";
}


imprimirMensagens();

$variavel = 1;

function trocaValor() {
    // Dentro da função a variável tem escopo próprio
    $variavel = 2;
    echo "Durante a função: $variavel<br>";
}

echo "antes: $variavel<br>";
trocaValor();
echo "depois: $variavel<br>";


echo "<hr>";
function trocaValorDeVerdade(){
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel<br>";
}


echo "Antes: $variavel<br>";
trocaValorDeVerdade();
echo "Depois: $variavel<br>";
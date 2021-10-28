<div class="titulo">Include função</div>

<?php 

echo "Carregando: include_arquivo<br>";

function carregarArquivos() {
    include('include_arquivo.php');

    echo $variavel . '<br>';
    echo soma(2, 5) . '<br>';
}

echo 'Novamento no arquivo include_funcao';

carregararquivos();
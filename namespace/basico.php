<?php namespace contexto;?>

<div class="titulo">Exemplo Básico</div>

<?php 

// Para referenciar o namespace atual, usa-se:
echo __NAMESPACE__. '<br>';

/* 
    Quando criada dessa forma o php automaticamente atrela a constante 
    ao namespace que está no arquivo atual
*/
const constante1 = 123;

/**
 * Quando criada dessa forma, é necessário informar o nome do namespace 
 * em que será inserido a variavel 
 */
define('contexto\constante2', 234);
define(__NAMESPACE__ . '\constante3', 345);


// Pode criar em outro namespace, mesmo que ele ainda não exista
define('outro_contexto\constante4', 456);

echo constante1 . '<br>';
echo constante2 . '<br>';
// echo \contexto\constante3 . '<br>';
echo \outro_contexto\constante4 . '<br>';
echo constant(__NAMESPACE__ . '\constante3') . '<br>';

function soma($a, $b) {
    return $a + $b;
}

// Pode acessar uma função de outro namespace passando o caminho dele com barras invertidas
echo \contexto\soma(1, 2) . '<br>';
// Quando a função se encontra no mesmo arquivo, deispensa a barra
echo soma(1, 2) . '<br>';

function strpos($str, $txt) {
    echo "Buscando o texto '{$str}' em '{$txt}'<br>";
    return 1;
}


echo strpos('Texto genérico para busca', 'busca') . '<br>';
/**
 * Quando há conlfito de nomes em alguma função, seja do proprio php ou seja de outra biblioteca
 * usa-se a barra invertida para referenciar qual o namespace que está sendo usado
 * caso estja em outro arquivo, terá que informar o nome do namespace
 */
echo \strpos('Texto genérico para busca', 'busca') . '<br>';
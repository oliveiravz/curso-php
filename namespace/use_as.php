<?php namespace Outro\Nome; ?>
<div class="titulo">Use/As</div>

<?php 
echo __NAMESPACE__ . '<br>';

include('use_as_arquivo.php');

function soma($a, $b) {
    return $a . $b;
}

// Classe e função conflituosas
class Classe {
    public $var;

    function func(){
        echo __NAMESPACE__  . ' -> '. __CLASS__ . ' -> ' . __METHOD__ . '<br>';
    }
}

echo \Nome\Bem\Grande\constante . '<br>';

use const Nome\Bem\Grande\constante;
echo constante . '<br>';

use Nome\Bem\Grande as ctx;
echo soma(1, 2) . '<br>';
echo ctx\soma(1, 2) . '<br>';

// use function Nome\Bem\Grande\soma;

// com o alias é possível passar uma função através do namespace
use function Nome\Bem\Grande\soma as somaReal;
echo somaReal(100, 2) . '<br>';

// formas de chamar uma função
$a = new Classe();
$a->func();


$b = new \Nome\Bem\Grande\Classe();
$b->func();

use \Nome\Bem\Grande\Classe as D;
$d = new D();
$d->func();

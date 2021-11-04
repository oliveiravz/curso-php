<?php namespace App; ?>

<div class="titulo">Sub-Namespace</div>

<?php

/**
 * É possível ter váriso namespaces no mesmo arquivo, desde que o raoz seja o que está na linha 1
 */
echo __NAMESPACE__ . '<br>';
const constante = '123';

namespace App\Principal;
echo __NAMESPACE__ . "<br>";
const constante = 234;

namespace App\Principal\Específico;
echo __NAMESPACE__ . '<br>';
const constante = 345;

// Formas de acessar as constantes de diferentes subsnamespaces
echo constante . '<br>';
echo constant('\\' . __NAMESPACE__ . '\constante') . '<br>';

echo \App\constante . '<br>';
echo \App\Principal\constante . '<br>';
echo \App\Principal\Específico\constante . '<br>';
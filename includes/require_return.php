<div class="titulo">Return & Require</div>

<?php
$variavelRetornada = require('return_usado.php');
echo "$variavelRetornada<br>";
echo "$variavelRetorno<br>";

echo __DIR__ . '<br>';

$variavelRetorno2 = require(__DIR__ . '/return_nao_usado.php');
echo "$variavelRetorno2<br>";
echo "$valorDeclarada<br>";
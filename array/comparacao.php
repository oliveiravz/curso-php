<div class="titulo">Comparação Arrays</div>

<?php
$arr1 = ['nome' => 'Maria', 'idade' => 20];
$arr2 = ['nome' => 'Maria', 'idade' => 20];
var_dump($arr1 == $arr2);
var_dump($arr1 === $arr2);

// A comparação == leva em consideração a quantidade de chaves e valores, que devem ser iguais
// A comparação === leva em consideração a quantidade, os tipos e a ordem de chaves e valores
$arr3 = ['idade' => 20, 'nome' => 'Maria'];
echo '<br>';
var_dump($arr1 == $arr3);
var_dump($arr1 === $arr3);
var_dump($arr1 != $arr3);
var_dump($arr1 !== $arr3);

echo '<br>';
$arr4 = ['idade' => '20', 'nome' => 'Maria'];
var_dump($arr1 == $arr4);
var_dump($arr1 === $arr4);

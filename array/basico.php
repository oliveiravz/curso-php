<div class="titulo">Array</div>

<?php
$lista = array(1, 2, 3.4, "texto", 5, 6, 7, 8);
echo $lista . '<br>';
var_dump($lista);
echo '<br>';
print_r($lista);

echo "<br>";
echo "<br>";
echo "Inicio do foreach";
echo "<br>";

echo "<table border='1'>";
echo "<tr>";
echo "<th>Tabela</th>";
echo "</tr>";
echo "<tr>";
foreach ($lista as $chaves => $valores) {
    echo "<td>$valores</td>";
}
echo "</tr>";
echo "</table>";

$lista[0] = 1234;
print_r($lista);

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>';
var_dump($lista[4]);

$texto = 'Esse é um texto de teste';
echo '<br>' . $texto[0];
echo '<br>' . $texto[2];
echo '<br>' . $texto[11]; // cuidado!
echo '<br>' . mb_substr($texto, 10, 1);
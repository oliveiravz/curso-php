<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elza", "Rapunzel", "Branca de neve", "Cinderela"];
// Seleciona elemento do array aleatoriamente
$index = array_rand($nomes);
echo "<div center><h1>Vencedor: {$nomes[$index]}</h1></div>"

?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>
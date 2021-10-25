<div class="titulo">Tabuada</div>
<?php

function tabuada($numero){
    for ($i=0; $i <= 10 ; $i++) { 
        echo "$numero x $i = " . $numero * $i . "<br>";
        // return "$numero x $i = " . $numero * $i . "<br>";
    }
}

tabuada(10);
// echo tabuada(10);
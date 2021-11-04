<div class="titulo">Fatorial</div>

<?php


// Função recursiva é a função que chama ela mesma até obter o resultado de saída

// function fatorial($numero){
//     if($numero == 1){
//         return $numero;
//     }else{
//         return $numero * fatorial($numero - 1);
//     }
// }


function fatorial($numero){
    return ($numero) ? $numero * fatorial($numero - 1) : 1;
};


echo fatorial(5);
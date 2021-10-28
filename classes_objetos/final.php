<div class="titulo">Modificador Final</div>


<?php

/**
 * Marcar a classe com final, faz com que ela fique imutável, e sem poder ser herdada
*/


abstract class Abstrata {
    abstract public function metodo1();

    public final function metodo2(){
        echo "Não vou mudar<br>";
    }

}


class Classe extends Abstrata {
    public function metodo1(){
        echo "Executando método 1<br>";
    }

    /*public function metodo2(){
        echo "Executando método 2<br>";
    }*/
}

$classe = new Classe(123);
$classe->metodo1();
$classe->metodo2();

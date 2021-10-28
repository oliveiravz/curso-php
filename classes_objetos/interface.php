<div class="titulo">Interface</div>


<?php

interface Animal {
    function respirar();
}

interface Mamifero {
    function mamar();
}

interface Canino extends Animal, Mamifero {
    function latir(): string;
}
/* 
 * Quando é criada uma interface, é obrigatório instanciar a função da interface 
 * na classe,
 */

class Cachorro implements Canino {
    function respirar() {
        return "Irei usar oxigênio!";
    }

    function latir(): string {
        return 'au au';
    }

    function mamar(){
        return "irei usar leite";
    }
}

$animal = new Cachorro();
echo $animal->respirar(), "<br>";
echo $animal->latir(), "<br>";
echo $animal->mamar(), "<br>";

echo "FIM!!";
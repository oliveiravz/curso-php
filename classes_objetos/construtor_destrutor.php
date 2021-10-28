<div class="titulo">Construtor & destrutor</div>



<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18){
        echo 'Construtor invocado<br>';

        $this->nome = $novoNome;
        $this->idade = $idade;
    }


    function __destruct(){
        echo 'E morreu!<br>';
    }

    public function apresentar(){
        return "{$this->nome}, {$this->idade}";
    }
}


$pessoa = new Pessoa('João Victor', 27);
echo $pessoa->apresentar(), "<br>";
unset($pessoa); // destrutor
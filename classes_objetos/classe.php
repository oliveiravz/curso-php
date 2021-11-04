<div class="titulo">Primeira Classe</div>

<?php

class Cliente {

    //atributos
    public $nome = 'Anônimo'; // public define a visibilidade das variáveis ou funções
    public $idade = 18;

    public function apresentar(){
        return "Nome: {$this->nome}<br>Idade: {$this->idade}";
    }
}


$c1 = new Cliente();
$c1->nome = "João Victor";
$c1->idade = 27;
echo $c1->apresentar(), "<br>"

?>
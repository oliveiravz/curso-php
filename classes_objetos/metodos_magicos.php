<div class="titulo">Método Mágico</div>


<?php

class Pessoa {
    public $nome;
    public $idade;


    // O construtor é usado para setar atributos dentro do objeto
    function __construct($nome, $idade){
        echo 'Construtor invocado<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }


    function __destruct(){
        echo 'E morreu';
    }


    // Converte qualquer atributo para uma string
    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos.";
    } 

    public function apresentar(){
        echo $this . "<br>";
    }
    
    // Método usado para retornar atributos não declarados 
    public function __get($atrib) {
        echo "Lendo atributo não declarado: {$atrib}";
    }

    // Usado para alterar atributos, quando esses atributos não são declarados
    public function __set($atrib, $valor) {
        echo "Alterando atributo não declarado: {$atrib}/{$valor}";
    }

    public function __call($metodo, $param) {
        echo "Tentando executar método ${metodo}";
        echo ", com os parametros: ";
        print_r($param);
    }
}

$p = new Pessoa('João', 27);
$p->apresentar();
echo $p,'<br>';
$p->nome = 'Victor';
$p->apresentar();

$p->nomeCompleto = 'Muito legal'; // Chama o __set pq esse valor não existe
$p->nomCompleto;// chama o __get pq o atributo não existe
echo $p->nome;
echo '<br>';

$p->exec(1, 2, 3, 4); // call pq o metodo não existe
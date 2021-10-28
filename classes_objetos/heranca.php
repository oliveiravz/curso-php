<div class="titulo">Herança</div>

<?php
class Pessoa {
    public $nome;
    public $idade;


    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade= $idade;
        echo 'Pessoa criada<br>';

    }

    function __destruct(){
        echo 'Pessoa diz tchau';
    }


    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos!<br>";
    }

}

class Usuario extends Pessoa{
    public $login;

    function __construct($nome, $idade, $login){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->login = $login;
        echo 'Usuário criado<br>';
    }

    function __destruct(){
        echo "{$this->nome}, diz tchau!!";
    }

    public function apresentar(){
        echo "@{$this->login}: ";
        parent::apresentar();
        // return "{$this->login}: {$this->nome}, {$this->idade}";
    }
}

// $usuario = new Usuario('João Victor',27, 'joao_vic');
// $usuario->apresentar();
// unset($usuario);
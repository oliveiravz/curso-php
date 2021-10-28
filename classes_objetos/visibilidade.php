<div class="titulo">Visibilidade</div>

<?php
class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA(){
        echo "a) Público = {$this->publico}<br>";
        echo "b) Protegido = {$this->protegido}<br>";
        echo "c) Privado = {$this->privado}<br>";

        // Uma função privada ddeve ser acessada por uma função pública dentro da classe
        // caso contrário, não faz sentido ela existir, pois não será possível acessá-la for
        // da classe
        // $this->naoMostrar();
    }

    private function naoMostrar(){
        echo "Não vou imprimir!! ";
    }

    protected function vaiPorHeranca(){
        echo "Vou ser transmitida por herança!!";
    }

}

$a = new A();
// Quando uma variavel está privada dentro da classe, não é possível acessar ela diremtamente fora da classe
// echo $a->privado;
$a->mostrarA();
// $a->naoMostrar();


class B extends A {
    public function mostrarB(){
        echo "Class B) Público = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        // Nivel privado não é transmitido por herança
        echo "Class B) Privado = {$this->privado}<br>";
        

        // Uma função proteegida pode ser transmitida por herança
        // Mas não pode ser acessada diretamente
        parent::vaiPorHeranca();
    }
}

echo "<hr>";
$b = new B();
$b->mostrarB();
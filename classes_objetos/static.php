<div class="titulo">Membros estáticos</div>

<?php

class A {
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variavel de classe (estática)';

    /**
     * Quando a variável é estática (pertencente a classe) o valor dela não se altera
     * junto com as instâncias, e sim as instâncias se alteram caso a variável mude
     */

     public function mostrarA(){
        echo "Não estatico = {$this->naoStatic}<br>";
        // echo "Estatico = {$this->static}";

        // sel:: permite que seja acessado as variaveis estáticas 
        echo "Estatico = ". self::$static . "<br>";
     }


     public static function mostrarStaticA() {
        //  echo "Não estatico = {$this->naoStatic}";
        //  echo "Estatico = {$static}";
        echo "Estático = ". self::$static."<br>";

     }
}

// $obj = new A();
// $obj->mostrarA();
// $obj->mostrarStaticA();

// deve-se acessar uma função ou variável estatica diretamente da classe
echo A::$static, '<br>';
A::mostrarStaticA();
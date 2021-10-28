<div class="titulo">Classe abstrata</div>

<?php
 /**
  * uma classe abstrata é um clase na qual suas funções não precisam obeter regras de neǵocio esplícitas nela
  * podendo assim, extender ela para suas classes filhas e só assim definir alguma regra de negócio
  */
abstract class Abstrata {
    public abstract function metodo1();
    protected abstract function metodo2($parametro);
}


/**
 * Uma classe abstrata define que eserá obrigatória a implementação dela, pq uma classe abstrata deve ter
 * classes filhas, caso contrárioa sua existẽncia nãofaz sentido
 */
abstract class FilhaAbstrata extends Abstrata {
    public function metodo1(){
        echo "Executando metodo 1<br>";
    }

    abstract public function metodo3();
}

class Concreta extends FilhaAbstrata {
    public function metodo1(){
        echo "Executando metodo 1 extendido<br>";
        parent::metodo1();
    }


    protected function metodo2($parametro) {
        echo "Executando método 2, com parametro $parametro<br>";
    }

    public function metodo3(){
        echo "Executando 3<br>";
        $this->metodo2('interno');
    }
}

$c = new Concreta();
$c->metodo1();
$c->metodo3();

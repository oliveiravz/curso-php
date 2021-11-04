<div class="titulo">Traits #01</div>

<?php

/*
 * Traits são um mecanismo para reuso de código
 * Uma trait é similar a uma classe, mas usada somente para destinar uma funcionalidade rápida
 * Não é possível acessar uma trait diretamente, é necessaŕio semopre isntancia-la em uma classe
 * para ser possível o acesso
 */

trait validacao {
    public function validarString($str){
        return isset($str) && $str !== '';
    }
}


trait validacaoMelhor {
    public function validarStringMelhor($str) {
        return isset($str) && trim($str);
    }
}


class Usuario {
    use validacao, validacaoMelhor;
}

$usuario = new Usuario(1, 2, 3);
echo $usuario->validarString('  ');


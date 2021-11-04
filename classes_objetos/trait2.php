<div class="titulo">Traits #02</div>

<?php


trait validacao {
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}


trait validacaoMelhor {
    public function validarString($str) {
        return isset($str) & trim($str);
    }
}

/**
 * Pode acontecer de haver traits que possuem métodos com o memso nome
 * Nesses casos o php não escolhe qual método será usado
 * É preciso dizer ao php qual método vai ser incluido na classe 
 *
 **/
class Usuario {
    use validacao, validacaoMelhor {
        validacaoMelhor::validarString insteadOf validacao;

        validacao::validarString as validacaoSimples;
    }
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));
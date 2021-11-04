<?php namespace Aritmetica;

class NaoInteiroException extends \Exception {

}


function intdiv(int $n1, int $n2){
    if($n2 == 0){
        throw new \DivisionByZeroError();
    }
    
    if($n1 % $n2 > 0){
        throw new NaoInteiroException();
    }
    
    $resp = $n1 / $n2;

    return $resp;
}









<div class="titulo">Erros Personalizados</div>


<?php

/**
 * Excessões são 'erros' que já estão previstos na lógica do código, portando não geram quebra de código  e execução
 * Pra personalizar uma mensagem de erro, uma classe deve 'extends' a classe Exception
 * 
 * A classe é exception contém a mensagem da excessão e o código
 */
class FaixaEtariaException extends Exception{
    public function __construct($message, $code = 0, $previous = null){
        echo "Erro personalizado: $message<br>";
        parent::__construct($message, $code, $previous);
    }
}


function calcularAposentadoria($idade){
    if($idade < 18){
        // Para 'lançar' um novo erro usa-se a palavra reservada throw
        throw new FaixaEtariaException('Ainda está muito longe');
    }

    if($idade > 70){
        throw new FaixaEtariaException('Já deveria estar aposentado');
    }

    return 70 - $idade;
}

$idadesAvaliadas = [15, 58, 75, 20];

foreach($idadesAvaliadas as $idade) {
    try {
        $tempoRestante = calcularAposentadoria($idade);
        echo "Idade: $idade, $tempoRestante anos restantes para aposentadoria<br>";
    }catch(FaixaEtariaException $e){
        echo "Não foi possível calcular aposentadoria para $idade anos.<br>";
        echo "Motivo: {$e->getMessage()}<br>";
    }
}

echo '<br>Fim!';
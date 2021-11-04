<div class="titulo">Gerenciando Sessão</div>

<?php
session_start();
echo session_id();


/**
 * Toda sessão gera um id, e uma vez capturado, pode permitir que a pessoa que tem esse id 
 * se passe pelo 'dono' do id 
 * 
 * Por isso, esse id deve ser gerenciado, e isso pode ser feito, mudando o id de tempos em tempos
 * ou sendo destruído de tempos em tempos
 * 
 */
$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo '<br>' . $_SESSION['contador'];


if($_SESSION['contador'] % 5 === 0) {
    session_regenerate_id();
}

if($_SESSION['contador'] >= 15) {
    session_destroy();
}
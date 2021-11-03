<div class="titulo">Sessão</div>

<?php
session_start();
print_r($_SESSION);

echo "<br>";


if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'João';
}

if(!$_SESSION['email']){
    $_SESSION['email'] = 'jooa@email.com';
}


print_r($_SESSION);

?>

<p>
    <a href="exercicio.php?dir=sessao&file=basico_sessao_alterar">Alterar Sessão</a>
</p>

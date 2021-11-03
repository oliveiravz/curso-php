<?php
session_start();
print_r($_SESSION);

?>
<p>
    <b>Nome: </b> <?=$_SESSION['nome'] ?><br>
    <b>Email: </b> <?=$_SESSION['email'] ?><br>
</p>

<?php
$_SESSION['email'] = 'joaovictor@email.com';
print_r($_SESSION);
?>


<p>
    <a href="exercicio.php?dir=sessao&file=basico_sessao">Voltar</a>
</p>

<p>
    <a href="exercicio.php?dir=sessao&file=basico_sessao_limpar">Limpar Sessão</a>
</p>
<div class="titulo">Desafio do Módulo</div>

<?php

require_once 'usuario.php';
$usuario = new Usuario('João Victor',27, 'joao_vic');
$usuario->apresentar();
unset($usuario);
<?php


function novaConexao($banco = 'curso_php'){
    $servidor = 'localhost';
    $usuario = 'joaovictor';
    $senha = '123';

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if($conexao->connect_error) {
        die('Erro: ' . $conexao->connect_error);
    }

    return $conexao;
}
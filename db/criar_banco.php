<div class="titulo">Criar Banco</div>


<?php

require_once "conexao.php";

$conn = novaConexao(null);

$sql = 'CREATE DATABASE IF NOT EXISTS curso_php';

$res = $conn->query($sql);

if($res){
    echo "Sucesso ao criar banco de dados :)";
}else{
    echo "Erro " . $conn->error;
}

$conexao->close();

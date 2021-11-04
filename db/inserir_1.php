<div class="titulo">Inserir Registro #01</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario)
        VALUES
        ('Victor', '1994-05-07', 'victor@email.com', 'https://victorsite.com.br', 0, 18000)";

$conn = novaConexao();
$res = $conn->query($sql);


if($res){
    echo "Sucesso ao inserir dados ";
}else{
    echo "Erro: " . $conn->error;
}


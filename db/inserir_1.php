<div class="titulo">Inserir Registro #01</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario)
        VALUES
        ('Deise', '1986-11-03', 'deise@email.com', 'https://deisesite.com.br', 0, 18000)";

$conn = novaConexao();
$res = $conn->query($sql);


if($res){
    echo "Sucesso ao inserir dados ";
}else{
    echo "Erro: " . $conn->error;
}


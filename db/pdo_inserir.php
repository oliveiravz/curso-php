<div class="titulo">PDO: Inserir</div>

<?php

require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro(nome, email, nascimento, site, filhos, salario)
        VALUES ('Chaves del 8', 'chavito@email.com', '1998-5-20', 'https://turmadochavescom.br', 0, 3000)";

$conn = novaConexao();

// print_r(get_class_methods($conn));

if($conn->exec($sql)){
    $id = $conn->lastInsertId();
    echo "Novo cadastro com o id $id.";
}else{
    echo $conn->errorCode() . "<br>";
}
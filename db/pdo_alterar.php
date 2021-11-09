<div class="titulo">Alterar</div>

<?php

require_once "conexao_pdo.php";

$conn = novaConexao();

$sql = "UPDATE cadastro SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ? WHERE id = ?";

$stmt = $conn->prepare($sql);
$resultado = $stmt->execute([
    'Joao Victor',
    '1994-05-17',
    'joaovictor@email.com',
    'http://joaovictor.com.br',
    1,
    6500,
    3
]);


if($resultado){
    echo "Sucesso :)";
} else {
    print_r($stmt->errorInfo());
}
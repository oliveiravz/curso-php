<div class="titulo">PDO: Excluir</div>

<?php

require_once "conexao_pdo.php";

$conn = novaConexao();
$sql = "DELETE FROM cadastro WHERE id = :id";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', 1, PDO::PARAM_INT);

if($stmt->execute()){
    echo "Sucesso ao excluír registro<br>";
}else{
    echo "Erro: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

echo "<hr>";

$sqlConsulta = "SELECT * FROM cadastro";
$resultadoConsulta = $conn->query($sqlConsulta)->fetchAll(PDO::FETCH_ASSOC);
print_r($resultadoConsulta);

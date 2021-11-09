<div class="titulo">PDO: Consultar</div>


<?php
require_once "conexao_pdo.php";

$conn = novaConexao();
$sql = "SELECT * FROM cadastro";
$resultado = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($resultado);

echo "<hr>";
// LIMIT = Limite de linhas que o SELECT vai mostrar 
// OFFSET = Indica por qual registro o a consulta vai iniciar, 
// Exemplo: Se o LIMIT for 55 e o OFFSET for 15 siginifca que a partir da linha 15, ele vai mostrar
// 55 registros
$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";

$stmt = $conn->prepare($sql);
// bindValue -> recebe uma string como valor, e é preciso formatar para outro tipo
// Nesse exemplo esta formatado para inteiro
$stmt->bindValue(':qtde', 2, PDO::PARAM_INT);
$stmt->bindValue(':inicio', 1, PDO::PARAM_INT);

// print_r(get_class_methods($stmt));

if($stmt->execute()) {
    // fetchAll trás todos os registros 
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

echo "<hr>";

$sql = "SELECT * FROM cadastro WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', 1, PDO::PARAM_INT);
// if($stmt->execute([1])) {
if($stmt->execute()) {
    // fetch trás apenas 1 registro
    $resultado = $stmt->fetch();
    print_r($resultado);
}else{
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

$conn->close();
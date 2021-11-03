<div class="titulo">Excluir Registro #01</div>


<?php

require_once 'conexao.php';

$sql = "DELETE FROM cadastro WHERE id = 3";

$conn = novaConexao();
$res = $conn->query($sql);

if($res){
    echo "Sucesso ao excluir registro";
}else{
    echo "Erro: " . $conn->error;
}

$conn->close();

?>
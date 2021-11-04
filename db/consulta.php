<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="titulo">Consultar Registros</div>

<?php
require_once "conexao.php";

$sql = "SELECT id, nome, nascimento, email FROM  cadastro";

$conn = novaConexao();
$res = $conn->query($sql);


$registros = [];

if($res->num_rows > 0){
    while($row = $res->fetch_assoc()){
        $registros[] = $row;
    }
}elseif($conn->error) {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>

<table class="table table-hover table-striped">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro) {?>
            <tr>
                <td><?=$registro['id']?></td>
                <td><?=$registro['nome']?></td>
                <td><?=date('d/m/Y', strtotime($registro['nascimento']))?></td>
                <td><?=$registro['email']?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

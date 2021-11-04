<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src='js/jquery.js'></script>
<div class="titulo">Excluir Registro #02</div>


<?php

require_once 'conexao.php';

$conn = novaConexao();
$registros = [];

$sql = "SELECT id, nome, nascimento, email FROM cadastro";
$res = $conn->query($sql);
if ($res->num_rows > 0) {
    //fetch_assoc retorna uma matriz associativa que representa uma linha de resultados pelo parametro
    // e null caso não houver mais linhas 
    while ($row = $res->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif ($conn->error) {
    echo "Erro: " . $conn->error;
}


if($_GET['excluir']) {
    // A função prepare trás mais segurança para o comando SQL
    // Evitando ataques do tipo SQL injection
    $sql = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $conn->prepare($sql);
    // A função bind_param precisa do tipo do parametro e as variáveis correspondentes
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();

    if ($stmt->execute() == true) {
        header('Location: exercicio.php?dir=db&file=excluir_registro2');
    }
}
?>

<table class="table table-striped">
    <thead>
        <th>id</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach ($registros as $registro) { ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= date('d/m/Y', strtotime($registro['nascimento'])) ?></td>
                <td><?= $registro['email'] ?></th>
                <td>
                    <a href="exercicio.php?dir=db&file=excluir_registro2&excluir=<?=$registro['id']?>" class="btn btn-danger" data-bs-toggle="modal" data-confirm="Tem certeza que deseja excluir?" data-bs-target="#confirm-delete">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<script>
    $(document).ready(function(){
        $('a[data-confirm]').click(function(ev){

            // Variavel que referencia o href da tag <a> 
            var href = $(this).attr('href');

            if(!$('#confirm-delete').length){
                $('table').append('<div class="modal fade" id="confirm-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-body">Deseja mesmo excluir o registro?</div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button><a class="btn btn-danger" id="dataConfirmOK">Confirmar</button></div></div></div>');
            }
            
            // Referecia a vairavel cridada dentro dessa função
            $('#dataConfirmOK').attr('href', href);
            // Mostra a janela modal, deve-se coner o id na tag do botão
            $('#confirm-delete').modal({show: true});

            return false;
        });
    });
</script>
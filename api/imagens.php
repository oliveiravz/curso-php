<div class="titulo">Desafio imagens</div>

<?php

session_start();

// Array para guardar informações da imagem
$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ . '/../files/';
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];

if(move_uploaded_file($tmp, $arquivo)) {
    echo "<br>Arquivo válido enviado com sucesso";
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivos'] = $arquivos;
}else{
    echo "<br>Erro no upload do arquivo: Inválido";
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button>Enviar</button>
</form>


<ul>
    <?php foreach($arquivos as $arquivo){?>
        <?php if(stripos($arquivo, '.png') > 0){ ?>
            <li>
                <!-- Não precisa voltar uma pasta para mostrar as imagens na tela -->
                <img src="files/<?= $arquivo ?>" height="120"/>
            </li>
        <?php } ?>
    <?php } ?>
</ul>


<style>
    input, button {
        font-size: 1.2rem;
    }
</style>
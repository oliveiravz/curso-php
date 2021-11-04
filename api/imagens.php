<div class="titulo">Imagens</div>

<?php 
session_start();

$arquivos = $_SESSION['arquivos'] ?? [];

// $pastaUpload = __DIR__ . '/../files/';
$pastaUpload = "exercicio.php?dir=files&file=";
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivos']['tmp_name'];


if (move_uploaded_file($tmp, $arquivo)) {
    echo "<br>Arquivo válido e enviado com sucesso.";
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivos'] = $arquivos;
} else {
    echo "<br>Erro no upload de arquivo!";
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo){ ?>
        <?php if(stripos($arquivo, '.jpg') > 0){ ?>
            <li>
                <a href="/../files/<?= $arquivo ?>">
                    <img src="/../files/<?= $arquivo ?>"/>
                </a>
            </li>
        <?php } ?>
    <?php } ?>
</ul>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>
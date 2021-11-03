<div class="titulo">Imagens</div>

<?php 
session_start();

$arquivos = $_SESSION['arquivos'] ?? [];

$nomeArquivo = $_FILES['arquivos']['name'];
$pastaUpload = __DIR__ . '/../files/';
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
    <input name="arquivos" type="file">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo){ ?>
        <?php if(stripos($arquivo, '.png') > 0){ ?>
            <li>
                <a href="../files/<?= $arquivo ?>">
                    <img src="../files/<?= $arquivo ?>" height="120"/>
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
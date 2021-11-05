<div class="titulo">Upload</div>

<?php 
print_r($_FILES);


//$_FILES: array que trás informações da imagem a ser carregada
if($_FILES && $_FILES['arquivo']) {
    $pastaUpload = '/var/www/html/curso-php/files/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];
    // move_uploaded_file() => move arquivo para caminho selecionado
    if (move_uploaded_file($tmp, $arquivo)) {
        echo "<br>Arquivo válido e enviado com sucesso.";
    } else {
        echo "<br>Erro no upload de arquivo!";
    }
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>
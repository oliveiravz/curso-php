<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if(isset($_POST['email'])) {
    $usuarios  = [
        [
            "nome" => "João Victor",
            "email" => "joao@email.com",
            "senha" => "1234567"
        ]
    ];

    foreach($usuarios as $usuario) {
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if($emailValido && $senhaValida) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];

            $exp = time() + 60 * 60 * 24 * 30;
            setcookie('usuario', $usuario['nome'], $exp);
            header('Location: index.php');
        }

        if(!$_SESSION['usuario']) {
            $_SESSION['erros'] = ['Usuário/senha inválidos'];
        }

    }


}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Curso PHP</title>
</head>

<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja Bem Vindo</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <h3>Identifique - se</h3>
            <?php if($_SESSION['erros']){ ?>
                <?php foreach($_SESSION['erros'] as $erro){?>
                    <p><?= $erro ?></p>
                <?php } ?>
            <?php }?>
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button type="submit" name="entrar">Entrar</button>
            </form>
        </div>
    </main>
    <?php include 'template/footer.php'; ?>
</body>

</html>


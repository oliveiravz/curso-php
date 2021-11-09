<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="titulo">Inserir registro #02</div>

<?php
if(count($_POST) > 0){
    $dados = $_POST;
    $erro = [];

    if(trim($dados['nome']) === "") {
        $erro['nome'] = 'Nome é obrigatório';
    }

    if(isset($dados['nascimento'])){
        $data = DateTime::createFromFormat('d/m/Y', $dados['nascimento']);
        if(!$data){
            $erro['nascimento'] = "Data deve estar no padrão dd/mm/aaaa";
        }
    }

    // fitler_var filtra valor específico, como e-mail, url, tipos valores numéricos(int, float)
    if(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)){
        $erro['email'] = "E-mail inválido";
    }

    if(!filter_var($dados['site'], FILTER_VALIDATE_URL)) {
        $erro['site'] = "Site inválido";
    }

    $filhosConfig = [
        "options" => ["min_range" => 0, "max_range" => 20]
    ];
    if(!filter_var($dados['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $dados['filhos'] != 0) {
        $erro['filhos'] = 'Quantidade de filhos inválida (0-20)';
    }

    $salarioConfig = ['options' => ['decimal' => ',']];
    if(!filter_var($dados['salario'],
    FILTER_VALIDATE_FLOAT, $salarioConfig)){
        $erro['salario'] = 'Salário inválido';
    }

    if(!count($erro)){
        require_once "conexao.php";

        $sql = "INSERT INTO cadastro
        (nome, nascimento, email, site, filhos, salario)
        VALUES (?, ?, ?, ?, ?, ?)";

        $conn = novaConexao();
        $stmt = $conn->prepare($sql);


        $params = [
            $dados['nome'],
            // Operação ternária para passar o formato de data que o SQL espera
            $data ? $data->format('Y-m-d') : null,
            $dados['email'],
            $dados['site'],
            $dados['filhos'],
            $dados['salario'],
        ];

        // no bind_param precia informar quais são os tipos de dados que estão sendo passsados 
        // para o banco s = string, i = inteiro, d = decimal
        $stmt->bind_param("ssssid", ...$params);

        if($stmt->execute()){
            unset($dados);
        }
    }
}
?>

<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="nome">Nome</label>
            <input type="text" 
                class="form-control <?= $erro['nome'] ? 'is-invalid' : ''?>"
                id="nome" name="nome" placeholder="Nome"
                value="<?= $dados['nome'] ?>">
            <div class="invalid-feedback">
                <?= $erro['nome'] ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="nascimento">Nascimento</label>
            <input type="text"
                class="form-control <?= $erro['nascimento'] ? 'is-invalid' : ''?>"
                id="nascimento" name="nascimento"
                placeholder="Nascimento"
                value="<?= $dados['nascimento'] ?>">
            <div class="invalid-feedback">
                <?= $erro['nascimento'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text"
                class="form-control <?= $erro['email'] ? 'is-invalid' : ''?>"
                id="email" name="email" placeholder="E-mail"
                value="<?= $dados['email'] ?>">
            <div class="invalid-feedback">
                <?= $erro['email'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text"
                class="form-control <?= $erro['site'] ? 'is-invalid' : ''?>"
                id="site" name="site" placeholder="Site"
                value="<?= $dados['site'] ?>">
            <div class="invalid-feedback">
                <?= $erro['site'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtde de Filhos</label>
            <input type="number" 
                class="form-control <?= $erro['filhos'] ? 'is-invalid' : ''?>"
                id="filhos" name="filhos"
                placeholder="Qtde de Filhos"
                value="<?= $dados['filhos'] ?>">
            <div class="invalid-feedback">
                <?= $erro['filhos'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text"
                class="form-control <?= $erro['salario'] ? 'is-invalid' : ''?>"
                id="salario" name="salario"
                placeholder="Salário"
                value="<?= $dados['salario'] ?>">
            <div class="invalid-feedback">
                <?= $erro['salario'] ?>
            </div>
        </div>
    </div>
    <button class="btn btn-success btn-lg">Enviar</button>
</form>
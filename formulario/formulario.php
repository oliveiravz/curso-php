<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="titulo">Formulário</div>

<?php

/**
 * Para fazer uma validação, podemos contar o array POST e depois verificar se existe algo nos inputs do formuário
 */

if(count($_POST) > 0){
    /**
     * filter input, seleciona o variavel pelo nome e opcionalmente filtrae também verifica se existe valores no input
     */
    $erro = [];
    if(!filter_input(INPUT_POST, "nome")) {
        $erro['nome'] = 'Nome é obrigatório';
    }

    if(filter_input(INPUT_POST, "nascimento")){
        $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
        if(!$data){
            $erro['nascimento'] = "Data deve estar no padrão dd/mm/aaaa";
        }
    }

    // fitler_var filtra valor específico, como e-mail, url, tipos valores numéricos(int, float)
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $erro['email'] = "E-mail inválido";
    }

    if(!filter_var($_POST['site'], FILTER_VALIDATE_URL) || filter_input(INPUT_POST, "site")) {
        $erro['site'] = "Site inválido";
    }

    $filhosConfig = [
        "options" => ["min_range" => 0, "max_range" => 20]
    ];
    if(!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $_POST['filhos'] != 0) {
        $erro['filhos'] = 'Quantidade de filhos inválida (0-20)';
    }

    $salarioConfig = ['options' => ['decimal' => ',']];
    if(!filter_input(INPUT_POST, "salario")){
        $erro['salario'] = 'Campo salário obrigatório';
    }
    if(!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)){
        $erro['salario'] = 'Salário inválido';
    }
}

?>

<h2>Cadastro</h2>
<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control <?= $erro['nome'] ? 'is-invalid' : '' ?>" name="nome" id="nome" placeholder="Nome" value="<?=$_POST['nome']?>">
            <div class="invalid-feedback"> <?=$erro['nome']?></div>
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control <?= $erro['nascimento'] ? 'is-invalid' : '' ?>" name="nascimento" id="nascimento" placeholder="Nascimento" value="<?=$_POST['nascimeto']?>">
            <div class="invalid-feedback"><?=$erro['nascimento']?></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control <?= $erro['email'] ? 'is-invalid' : '' ?>" name="email" id="email" placeholder="E-mail" value="<?=$_POST['email']?>">
            <div class="invalid-feedback"><?=$erro['email']?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erro['site'] ? 'is-invalid' : '' ?>" name="site" id="site" placeholder="Site" value="<?=$_POST['site']?>">
            <div class="invalid-feedback"><?=$erro['site']?></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtde. de filhos</label>
            <input type="number" class="form-control <?= $erro['filhos'] ? 'is-invalid' : '' ?>" name="filhos" id="filhos" placeholder="Qtde. de filhos" value="<?=$_POST['filhos']?>">
            <div class="invalid-feedback"><?=$erro['filhos']?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salario</label>
            <input type="text" class="form-control <?= $erro['salario'] ? 'is-invalid' : '' ?>" name="salario" id="salario" placeholder="Salario">
            <div class="invalid-feedback"><?=$erro['salario']?></div>
        </div>
    </div>
    <button class="btn btn-success">Enviar</button>
</form>
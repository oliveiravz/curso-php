<div class="titulo">Desafio Data</div>


<?php


class Data {
    public $dia = 01;
    public $mes = 01;
    public $ano = 1970;


    public function apresentar(){
        return "A data de hoje é: {$this->dia}/{$this->mes}/{$this->ano}";
    }
}


$hoje = new Data();
$hoje->dia = 26;
$hoje->mes = 10;
$hoje->ano = 2021;
echo $hoje->apresentar();

<?php


function novaConexao($banco = 'curso_php') {
    $servidor = 'localhost';
    $usuario = 'joaovictor';
    $senha = "123";


    try {
        $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

        return $conn;
    }catch(PDOException $e){
        die('Erro: ' . $e->getMessage());
    }
}

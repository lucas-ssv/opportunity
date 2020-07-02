<?php

include "acesso.php";

$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$tipo = $_GET['tipo'];
$telefone = $_GET['telefone'];
$mensagem = $_GET['mensagem'];
$botao = $_GET['botao'];

if ($botao == 'Enviar') {
    $comando = "insert into cliente (nome, email, tipo_cliente, telefone, mensagem) values ('$nome', '$sobrenome', '$tipo', '$telefone', '$mensagem')";
    $gravar = mysql_query($comando);

    if ($gravar) {
        echo 'Gravar blz';
    } else {
        echo 'Gravação já era';
    }
}

?>

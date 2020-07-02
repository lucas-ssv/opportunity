<html>

<head>
    <title>Opportunity</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#79b6a6">
    <link rel="stylesheet" href="css/custom-mobile.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css" />
    <link rel="stylesheet" href="OwlCarousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="OwlCarousel/dist/assets/owl.theme.default.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    $maquina = "localhost";
    $usuario = "id11286867_lucas";
    $senha = "lucas020799";
    $BcoDados = "id11286867_opportunity";

    $conexao = mysql_connect($maquina, $usuario, $senha);

    if (!$conexao) {
        echo 'Erro na conexão';
        exit;
    }

    $banco = mysql_Select_DB($BcoDados);

    if (!$banco) {
        echo 'Banco de dados não localizado';
        exit;
    }

    $res = mysql_query("select * from cliente");
    echo '<table class="table"><thead><tr><th>Código</th><th>Nome</th><th>E-mail</th><th>Tipo</th><th>Telefone</th><th>Mensagem</th><th>Excluir</th></tr></thead>';

    while ($escrever = mysql_fetch_array($res)) {
        echo '<tbody><tr><th>' . $escrever['cod_cliente'] . '</th><td>' . $escrever['nome'] . '</td><td>' . $escrever['email'] . '</td><td>' . $escrever['tipo_cliente'] . '</td><td>' . $escrever['telefone'] . '</td><td>' . $escrever['mensagem'] . '</td><td><a href=criar_conta.php?cod_cliente=' . $escrever['cod_cliente'] . '&botao=Excluir><i class="fas fa-trash"></a>' . '</td></tr></tbody>';
    }

    echo '</table>';

    ?>
</body>

</html>
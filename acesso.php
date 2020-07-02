<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <?php
        $maquina="localhost";
        $usuario="id11286867_lucas";
        $senha="lucas020799";
        $BcoDados="id11286867_opportunity";
        
        $conexao = mysql_connect($maquina, $usuario, $senha);
        
        if(!$conexao){
        echo 'Erro na conexão'; 
        exit;
        }   
        
        $banco = mysql_Select_DB($BcoDados);
        
        if(!$banco) {
        echo 'Banco de dados não localizado';
        exit;
        }
        
     ?>
</body>
</html>
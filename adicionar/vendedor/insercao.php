<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso!!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <?php 
    include("conexao.php");
	
    $vendedor = $_POST['vendedor'];
    $cargo = $_POST['cargo'];
        
    $mysqli->query("SET NAMES 'utf8'");
    
    $mysqli->query("INSERT INTO loja.tb008_vendedor (t008_id, t008_nome, t008_cargo) VALUES (NULL, '$vendedor', '$cargo');");
    
    if($mysqli)
    {
    echo "<h1>Vendedor(a) Cadastrado(a) com Sucesso !!!</h1> <br>";
    }
    ?>
    <input type="button" value="Voltar" onclick="javascript:history.go(-1)" class="bot-voltar">
    </main>
</body>
</html>

<?php


	
?>	
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sucesso!</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<main>
	<h1>Cliente Removido com Sucesso!</h1>
	<input type="button" value="Voltar" onclick="javascript:history.go(-1)">
	</main>
</body>
</html>

<?php

include("conexao.php");
$id = $_POST['id'];
$mysqli->query("SET NAMES 'utf8'");
$mysqli->query("DELETE FROM `tb009_cliente` WHERE t009_id = $id;");

?>	
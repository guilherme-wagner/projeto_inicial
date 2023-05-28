<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sucesso!!</title>
</head>
<body>
	
</body>
</html>

<?php

include("conexao.php");

	$ID_vendedor = $_POST['id'];
	
$mysqli->query("SET NAMES 'utf8'");
$mysqli->query("DELETE FROM `tb008_vendedor` WHERE t008_id = $ID_vendedor;");

if($mysqli)
{
echo " <h1>Vendedor Removido Com Sucesso!! </h1> <br>";	
}
	
?>	
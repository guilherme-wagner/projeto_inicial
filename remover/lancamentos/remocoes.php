<?php
//apaga toda linha 
include("conexao.php");

	$cod = $_POST['cod'];
	
	

$mysqli->query("SET NAMES 'utf8'");
$mysqli->query("DELETE FROM `alunos` WHERE cod = $cod;");

if($mysqli)
{
echo "Linha removida !!! <br>";
	
}//fim do while
	

	
?>	
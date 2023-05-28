<?php

include("conexao.php");

date_default_timezone_set('America/Sao_Paulo'); 
$dt = date('d/m/Y \a\s H:i:s');

$descricao = $_POST['desc'];
$tipo_lancamento = $_POST['tp_lanc'];
//$tipo_contabil = $_POST['tp_cont'];
$tipo_vendedor = $_POST['tp_vend'];
$cliente = $_POST['cliente'];
$data_hora = $dt;
$forma_pag = $_POST['pagamento'];
$valor = $_POST['valor'];

$mysqli->query("SET NAMES 'utf8'");

$mysqli->query("INSERT INTO loja.tb010_lancamentos_cont (
id_010, 
t010_descricao,
 t010_tp_lanc, 
 t010_tp_contab, 
 t008_id, 
 t009_id,
 t010_dh_lanc, 
 t010_tp_pgto, 
 t010_valor) 
 VALUES 
 (NULL, '$descricao', '$tipo_lancamento', 0,1,'$data_hora','$forma_pag','	$valor');");
 
 //(NULL, '$descricao', '$tipo_lancamento','$tipo_contabil', 0,1,'$data_hora','$forma_pag','	$valor');");

if($mysqli)
{
echo "<h1>Lançamento Cadastrado com Sucesso !!! </h1> <br>";

}

?>	
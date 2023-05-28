<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso</title>
    <link rel="stylesheet" href="style-cad_cliente.css">
</head>

<body>
    <main>
        <h1>
            <?php
            include("conexao.php");

            $cliente = $_POST['cliente'];
            $CPF = $_POST['CPF'];

            $mysqli->query("SET NAMES 'utf8'");
            $mysqli->query("INSERT INTO loja.tb009_cliente (t009_id, t009_nome, t009_cpfcnpj) VALUES (NULL, '$cliente', '$CPF' );");

            if ($mysqli) {
                echo "Cliente Cadatrado com Sucesso!!";
            }
            ?>
        </h1>

        <input type="button" value="Voltar" onclick="javascript:history.go(-1)">
    </main>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover Vendedor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <fieldset>
            <legend><b> Remoção de Vendedores </b></legend>
            <div class="inputBox">
                <p class="p1"> Informe o ID do vendedor que você deseja remover e clique em Remover. </p>

                <form name="remocoes" action="remocoes.php" method="post">
                    ID do Vendedor: <INPUT TYPE="TEXT"  NAME="id" class="id" required >
                    <br><br>
                    <INPUT TYPE="SUBMIT" VALUE="Remover" class="bot-enviar">
                    <INPUT TYPE="RESET" VALUE="Limpar" class="bot-reset">
                    <input type="button" value="Voltar" onclick="javascript:history.go(-1)" class="bot-voltar">
                    </form>
            </div>
        </fieldset>
    </div>
</body>
</html>

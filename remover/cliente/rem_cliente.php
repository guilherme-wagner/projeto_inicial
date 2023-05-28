<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <fieldset>
            <legend><b>Remoção de Clientes</b></legend>
            <div class="inputBox">
                <form name="remocoes" action="remocoes.php" method="post">
                    <p1 class="p1">Informe o ID do cliente que você deseja remover, e clique no botão Remover.</p1>
                    <br><br>
                    ID do Cliente: <INPUT TYPE="TEXT" NAME="id" class="campo-id" required>
            
                    <br><br>
            
                    <INPUT TYPE="SUBMIT" VALUE="Remover" class="bot-enviar">
                    <INPUT TYPE="RESET" VALUE="Limpar" class="bot-reset">
                </form>
            </div>
        </fieldset>
    </div>
</body>
</html>

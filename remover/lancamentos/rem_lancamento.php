<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover lançamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <fieldset>
            <legend><b>Remoção de lançamento</b></legend>
            <div class="inputBox">
                <p class="p1">Informe o código da venda que deseja excluir, e clique no botão Remover.</p>
                <form name="remocoes" action="remocoes.php" method="post">
                    Cód: <INPUT TYPE="TEXT"  NAME="cod" class="campo-cod" required >
                    <br><br>
                    <INPUT TYPE="SUBMIT" VALUE="Remover" class="bot-enviar">
                    <INPUT TYPE="RESET" VALUE="Limpar" class="bot-reset">
                    </form>
                    
            </div>
        </fieldset>
    </div>
</body>
</html>


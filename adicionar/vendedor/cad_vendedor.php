<!DOCTYPE html>
<html lang="pt-br">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar Vendedor</title>
        <link rel="stylesheet" href="style.css">
</head>

<body>
        <div class="box">
                <fieldset>
                        <legend><b>Adicionar Novo(a) Vendedor(a)</b></legend>
                        <div class="inputBox">
                                <form name="insercao" action="insercao.php" method="post">
                                        Nome: <INPUT TYPE="TEXT" NAME="vendedor" class="campo-nome" required>
                                        <br><br>

                                        Cargo: <INPUT TYPE="TEXT" NAME="cargo" class="campo-cargo" required>
                                        <br><br>

                                        <INPUT TYPE="SUBMIT" VALUE="Cadastrar" class="bot-enviar">
                                        <INPUT TYPE="RESET" VALUE="Limpar" class="bot-reset">
                                        <input type="button" value="Voltar" onclick="javascript:history.go(-1)" class="bot-voltar">
                                </form>
                        </div>
                </fieldset>
        </div>
</body>

</html>
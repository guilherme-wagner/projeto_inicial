<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastro de Clientes</title>
   <link rel="stylesheet" type="text/css" href="style-cad_cliente.css">
</head>

<body>
   <div class="box">
      <fieldset>
         <legend><b>Adicionar Novo Cliente</b></legend>
         <br>
         <div class="inputBox">

            <form name="insercao" action="insercao.php" method="post">

               Cliente: <input TYPE="TEXT" NAME="cliente" class="bot-cliente" autocomplete="off" required>
               <br><br>
               CPF: <input TYPE="TEXT" NAME="CPF" class="bot-cpf" autocomplete="off" matinput mask="000.000.000-00" required>
               <br><br>
               <input TYPE="SUBMIT" VALUE="Cadastrar" class="bot-enviar">
               <input TYPE="RESET" VALUE="Limpar" class="bot-reset">
               <input type="button" value="Voltar" onclick="javascript:history.go(-1)" class="bot-voltar">

            </input

         </div>
      </fieldset>
   </div>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styleHome.css">
</head>

<body>
   
    <div class="box">
        <h1>Bem Vindo(a)!</h1>
        <fieldset>
            <legend><b>Escolha uma ação:</b></legend>
            <br>
            <div>
                
                <form action="/projeto/adicionar/cliente/cad_cliente.php" method="post">
                    <button>Cadastar um Cliente</button>
                </form>
                
                <br>
                
                <form action="/projeto/remover/cliente/rem_cliente.php" method="post">
                    <button>Remover um Cliente</button>
                </form>
                
                <br>
               
                <form action="/projeto/adicionar/vendedor/cad_vendedor.php" method="post">
                <button>Cadastrar um(a) Vendedor(a)</button>
                </form>
                
                <br>
                
                <form action="/projeto/remover/vendedor/rem_vendedor.php" method="post">
                    <button>Remover um(a) Vendedor(a)</button>
                </form>

                <br>

                <form action="/projeto/adicionar/lancamentos/cad_lancamento.php" method="post">
                    <button>Registar um Lançamento</button>
                </form>

                <br>

                <form action="/projeto/remover/lancamentos/rem_lancamento.php" method="post">
                    <button>Remover um Lançamento</button>
                </form>
               
                <br>

                <form action="/projeto/teste.php" method="post">
                    <button>Criar um Login</button>
                </form>
                
                <br>

                <form action="/projeto/login.php" method="post">
                    <button>Deslogar</button>
                </form>
               
            </div>
        </fieldset>
    </div>
</body>
</html>

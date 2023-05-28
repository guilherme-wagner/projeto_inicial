<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="icone.png">
    <style>

        body{font-family: Arial, Helvetica, sans-serif; background-image: linear-gradient(to right, #00ffff, #ff00ff)}
        div{background-color: rgba(0, 0, 0, 0.6); position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%); padding: 80px; border-radius: 15px; color: white;}
        input{padding: 15px; border: none; outline: none; font-size: 15px;}
        button{background-color: dodgerblue; border: none; padding: 15px; width: 100%; border-radius: 10px; color: white; font-size: 15px;}
        button:hover{background-color: deepskyblue; cursor: pointer;}
        
    </style>
</head>
<body>
    <div>
        <h1>Login</h1>
        <input type="text" placeholder="Usuário" required>
        <br><br>
        <input type="password" placeholder="Senha" required>
        <br><br>

        <form action="home.php" method="post">
            <button>Entrar</button>
        </form>
    </div>
</body>
</html>

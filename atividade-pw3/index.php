<?php 
    include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="base">
        <main>
            <article id="left">
                <div id="content-2">
                    <img src="img/5718669.png" alt="Imagem Ilutrativa" height="350px">
                </div>
            </article>
            <article id="right">
                <div id="content-1-login">
                    <form action="logpcss.php" method="POST" autocomplete="off">
                        <label for="user" id="labeluser">Login:</label>
                        <input type="email" name="user" id="user" placeholder="Email" class="inputlogin">
                        <input type="password" name="pass" id="pass" placeholder="Password" class="inputlogin">
                        <input type="submit" value="Entrar" id="inputentrar">
                    </form>
                    <p>Não possui conta?<a href="cadastrar.php">Cadastre-se</a>.</p>
                </div>
            </article>
        </main>
    </div>
</body>
</html>
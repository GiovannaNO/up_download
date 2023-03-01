<?php
    SESSION_START();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if(isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <div class="base">
        <main>
            <article id="left">
                <div id="content-2">
                    <img src="img/5718669.png" alt="Imagem Ilutrativa" height="350px">
                </div>
            </article>
            <article id="right">
                <div id="content-1-login">
                    <form action="cadastropcss.php" method="POST" autocomplete="off">
                        <label for="nome" id="labeluser">Cadastro:</label>
                        <input type="text" name="nome" id="nome" placeholder="Nome" class="inputlogin" required>
                        <input type="email" name="caduser" id="caduser" placeholder="Email" class="inputlogin" required>
                        <input type="text" name="cadpass" id="cadpass" placeholder="Password" class="inputlogin" required>
                        <input type="submit" value="Cadastrar" id="inputentrar">
                    </form>
                    <a href="index.php">Ir para o login</a>
                </div>
            </article>
        </main>
    </div>
</body>
</html>
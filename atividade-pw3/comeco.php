<?php
    include('protection.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Up/Download</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="base">
        <main>
            <article id="right">
                <div id="content-1">
                    <h4>Beja bem vindo! <?php echo $_SESSION['usuario']; ?>.</h4>
                    <a href="dpload.php" id="mainbutton">Ir para essão de Download e Upload</a>
                    <h4><a href="logout.php">loguot</a></h4>
                </div>
            </article>
            <article id="left">
                <div id="content-2">
                    <img src="img/5718669.png" alt="Imagem Ilutrativa" height="350px">
                </div>
            </article>
        </main>
    </div>
</body>
</html>
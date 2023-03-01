<?php
    include('protection.php');
    include('download.php');
    include_once('conexao.php');
    require_once('zip.php');
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
    <?php
        if(isset($_POST['enviarq'])){
            $arq = $_FILES['arquivo']['name'];

            $arq = str_replace(" ","_",$arq);
            $arq = str_replace("ç","c",$arq);

            if(file_exists("arquivos/$arq")){
                $a = 1;
                while(file_exists("arquivos/[$a]$arq")){
                    $a++;
                }

                $arq = "[".$a."]".$arq;
            }

            if(move_uploaded_file($_FILES['arquivo']['tmp_name'], "arquivos/".$arq)){
                $zip = new Zipar();
                $zip->ziparArquivos($arq, $arq.".zip", "arquivos/");
                unlink("arquivos/$arq");

                $result_upload = "INSERT INTO arquivos (nome) VALUES ('$arq.zip')";
                mysqli_query($mysqli, $result_upload);

                echo "<p id='warning' style='background-color: rgba(0, 128, 0, 0.5);'>Upload realizado com sucesso!</p>";
            }else{
                echo "<p id='warning' style='background-color: rgba(255, 0, 0, 0.5);'>Houve um problema. Upload NÃO realizado!</p>";
            }
        }

        if(isset($_GET['file'])){
            header("Content-Disposition: attachment; filename = " . basename($_GET['file']));
            readfile($_GET['file']);
            exit();
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
                <div id="content-1-main">
                    <a href="principal.php">página anterior</a>
                    <form action="" enctype="multipart/form-data" name="upload" method="post">
                        <input type="file" name="arquivo" id="file">
                        <input type="submit" name="enviarq" value="Enviar">
                    </form>
                    <div id="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Nº</th>
                                    <th style="width: 200px;">Arquivo</th>
                                    <th>Baixar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    mostrarArquivoDownload();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </article>
        </main>
    </div>
</body>
</html>
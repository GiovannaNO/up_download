<?php
    include('conexao.php');
    function mostrarArquivoDownload(){
        $sql = 'SELECT * FROM arquivos ORDER BY id DESC';
        $res = $GLOBALS['mysqli']->query($sql);

        if($res){
            while($row = $res->fetch_assoc()){
                echo "<tr> 
                        <td>".$row['id']."</td> <td>".$row['nome']."</td> 
                        <td><a href='arquivos/".$row['nome']."' target='_blank'>Download</a></td> 
                      </tr>"; 
            }
        }
    }
?>
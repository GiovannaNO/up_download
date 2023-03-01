<?php
SESSION_START(); 
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'caduser', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'cadpass', FILTER_SANITIZE_STRING);
/*
echo "Nome: $nome <br>";
echo "Email: $email <br>";
echo "Senha: $senha <br>";
*/

$result_usuario = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', md5('$senha'))";
mysqli_query($mysqli, $result_usuario);

if($nome == '' || $email == '' || $senha == ''){
    $_SESSION['msg'] = "<p id='warning' style='background-color: red;'>Preencha todos os campos!</p>"; 
        header("Location: cadastrar.php");
}else{
    if(mysqli_insert_id($mysqli)) {
        $_SESSION['msg'] = "<p id='warning' style='background-color: green;'>Usuário cadastrado com sucesso!</p>"; 
        header("Location: cadastrar.php");
    }else{
        $_SESSION['msg'] = "<p id='warning' style='background-color: red;'>Usuário não foi cadastrado!</p>"; 
        header("Location: cadastrar.php");
    }
}
<?php
$hostname = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'uploaddownload';

$mysqli = new mysqli($hostname, $usuario, $senha, $database);

if($mysqli->errno) {
    echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
}

?>
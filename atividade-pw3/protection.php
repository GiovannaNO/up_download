<?php
SESSION_START();
if(!$_SESSION['usuario']) {
    header("Location: index.php");
    exit();
}
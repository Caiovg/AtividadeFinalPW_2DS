<?php
session_start();

$user = $_POST['name'];
$pass = $_POST['pass'];

if(empty($user)){
    echo "ErroUser";
    die();
}
if(empty($pass)){
    echo "ErroPass";
    exit();
}
include "../model/BuscarUsuario.php";
?>
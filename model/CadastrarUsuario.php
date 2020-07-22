<?php   
    include "conexao.php";

    $sql = $conn->prepare("INSERT INTO Usuario (Nome, Sobrenome, CPF, UserName, Email, Senha, Tipo, RG, Celular, Nascimento, Endereco, Numero)
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
    $sql -> bind_param("ssssssssssss",$Nome, $Sobrenome, $CPF, $NomedoUsuario, $Email, $Senha, $tipo, $RG, $Celular, $Nascimento, $Endereco, $Numero);
    $sql -> execute() or die("ErroBanco");

    echo "Sucesso";

    $sql -> close();
    $conn -> close();

    die();
?>
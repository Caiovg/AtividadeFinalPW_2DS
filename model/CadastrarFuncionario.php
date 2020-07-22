<?php   
    include "conexao.php";

    $sql = $conn->prepare("INSERT INTO Funcionarios (Nome, Sobrenome, CPF, UserName, Email, Cargo, Senha, Tipo, RG, Celular, Nascimento, Endereco, Numero)
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $sql -> bind_param("sssssssssssss",$Nome, $Sobrenome, $CPF, $NomedoUsuario, $Email, $Cargo, $Senha, $tipo, $RG, $Celular, $Nascimento, $Endereco, $Numero);
    $sql -> execute() or die("ErroBanco");

    echo "Sucesso";

    $sql -> close();
    $conn -> close();

    die();
?>
<?php

function ValidarEmail ($Email)
{
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM usuario WHERE Email = ?");
    $sql->bind_param("s",$Email);
    $sql->execute();
    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();
    return $linha;
}

function ValidarEmailFuncionario ($Email)
{
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM Funcionarios WHERE Email = ?");
    $sql->bind_param("s",$Email);
    $sql->execute();
    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();
    return $linha;
}

function ValidarCPF ($CPF)
{
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM usuario WHERE CPF = ?");
    $sql->bind_param("s",$CPF);
    $sql->execute();
    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();
    return $linha;
}

function ValidarCPFFuncionario ($CPF)
{
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM Funcionarios WHERE CPF = ?");
    $sql->bind_param("s",$CPF);
    $sql->execute();
    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();
    return $linha;
}

function ValidarRG ($RG)
{
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM usuario WHERE RG = ?");
    $sql->bind_param("s",$RG);
    $sql->execute();
    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();
    return $linha;
}

function ValidarRGFuncionario ($RG)
{
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM Funcionarios WHERE RG = ?");
    $sql->bind_param("s",$RG);
    $sql->execute();
    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();
    return $linha;
}

function ValidarUserName ($NomedoUsuario)
{
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM usuario WHERE UserName = ?");
    $sql->bind_param("s",$NomedoUsuario);
    $sql->execute();
    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();
    return $linha;
}

function ValidarUserNameFuncionario ($NomedoUsuario)
{
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM Funcionarios WHERE UserName = ?");
    $sql->bind_param("s",$NomedoUsuario);
    $sql->execute();
    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();
    return $linha;
}

function ValidarCelular ($Celular)
{
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM usuario WHERE Celular = ?");
    $sql->bind_param("s",$Celular);
    $sql->execute();
    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();
    return $linha;
}

function ValidarCelularFuncionario ($Celular)
{
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM Funcionarios WHERE Celular = ?");
    $sql->bind_param("s",$Celular);
    $sql->execute();
    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();
    return $linha;
}

function ValidarCodbarras ($CODBARRAS)
{
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM produtos WHERE codBarras = ?");
    $sql->bind_param("s",$CODBARRAS);
    $sql->execute();
    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();
    return $linha;
}
function ValidarNome ($NOME)
{
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM produtos WHERE nome = ?");
    $sql->bind_param("s",$NOME);
    $sql->execute();
    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();
    return $linha;
}
?>
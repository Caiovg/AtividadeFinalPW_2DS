<?php
session_start();

if(empty($_POST) || isset($_POST['name'])){
    header("Location: ../view/TelaLogin.php");
}

$Nome = $_POST['Nome'];
$Sobrenome = $_POST['Sobrenome'];
$NomedoUsuario = $_POST['NomedoUsuario'];
$CPF = $_POST['CPF'];
$Nascimento = $_POST['Nascimento'];
$RG = $_POST['RG'];
$Email = $_POST['Email'];
$Celular = $_POST['Celular'];
$Endereco = $_POST['Endereco'];
$Numero = $_POST['Numero'];
$Senha = $_POST['Senha'];
$Confisenha = $_POST['Confisenha'];
$tipo ="cliente";


include "../model/ValidarCamposModel.php";

if(empty($Nome)){
    //echo "ErroNome";
    die("ErroNome");//os dois e a mesma coisa.
}
if(empty($Sobrenome)){
    die("ErroSobrenome");
}
if(empty($NomedoUsuario)){
    echo "ErroNomedoUsuario";
    die();
}
$linhaUserName = ValidarUserName($NomedoUsuario);
if(!empty($linhaUserName['UserName'])){
    echo "ErroUserNameExiste";
    die();
}
if(empty($CPF)){
    echo "ErroCPF";
    die();
}
$linhaCPF = ValidarCPF($CPF);
if(!empty($linhaCPF['CPF'])){
    echo "ErroCPFExiste";
    die();
}
if(empty($Nascimento)){
    echo "ErroNascimento";
    die();
}
if(empty($RG)){
    echo "ErroRG";
    die();
}
$linhaRG = ValidarRG($RG);
if(!empty($linhaRG['RG'])){
    echo "ErroRGExiste";
    die();
}
if(empty($Email)){
    echo "ErroEmail";
    die();
}
$linhaEmail = ValidarEmail($Email);
if(!empty($linhaEmail['Email'])){
    echo "ErroEmailExiste";
    exit();
}
if(empty($Celular)){
    echo "ErroCelular";
    die();
}
$linhaCelular = ValidarCelular($Celular);
if(!empty($linhaCelular['Celular'])){
    echo "ErroCelularExiste";
    die();
}
if(empty($Endereco)){
    echo "ErroEndereco";
    die();
}
if(empty($Numero)){
    echo "ErroNumero";
    die();
}
if(!is_numeric($Numero)){
    die("Erroletra");
}
if(empty($Senha)){
    die("ErroSenha");
}
if(empty($Confisenha)){
    die("ErroConfisenha");
}
if(empty($Senha == $Confisenha)){
    echo "ErroSenhasDiferentes";
    exit();
}
include "../model/CadastrarUsuario.php";

$_SESSION['email'] = $Email;
die();
?>
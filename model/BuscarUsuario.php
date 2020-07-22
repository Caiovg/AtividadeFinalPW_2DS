<?php
include "conexao.php";

$sql = $conn->prepare("SELECT * FROM usuario WHERE (Email = ? OR UserName = ?) AND Senha = ? AND Ativo = true");

$sql->bind_param("sss", $user, $user, $pass);

$sql->execute();

$resultado = $sql->get_result();
$linha = $resultado->fetch_assoc();

$sql->close();
$conn->close();

if(empty($linha)){
  echo "FalhaLogin";
  die();
}else{  
  $_SESSION['idUsuario'] = $linha['idUsuario'];
  $_SESSION['login'] = true;
  $_SESSION['Nome'] = $linha['Nome'];
  $_SESSION['Sobrenome'] = $linha['Sobrenome'];
  $_SESSION['CPF'] = $linha['CPF'];
  $_SESSION['UserName'] = $linha['UserName'];
  $_SESSION['Ativo'] = $linha['Ativo'];
  $_SESSION['Email'] = $linha['Email'];
  $_SESSION['Tipo'] = $linha['Tipo'];
  $_SESSION['RG'] = $linha['RG'];
  $_SESSION['Celular'] = $linha['Celular'];
  $_SESSION['Nascimento'] = $linha['Nascimento'];
  $_SESSION['Endereco'] = $linha['Endereco'];
  $_SESSION['Numero'] = $linha['Numero'];

  switch($linha['Tipo']){
      case "administrador":
        echo "SucessoADM";
      break;
      case "funcionario":
        echo "SucessoFuncionario";
      break;
      case "cliente":
        echo "SucessoCliente";
      break;
      default:
      echo "FalhaLogin";
      die(); 
    }
  }
?>
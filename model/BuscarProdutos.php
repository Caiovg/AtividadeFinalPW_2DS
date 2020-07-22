<?php
include "conexao.php";

$result_produtos = "SELECT * FROM Produtos WHERE ativo = 'Ativo'";
$resultado_produtos = mysqli_query($conn, $result_produtos);

/*$sql = $conn->prepare("SELECT * FROM Produtos");
$sql->execute();

$resultado = $sql->get_result();
$linha = $resultado->fetch_assoc();

if(empty($linha)){
    echo "Falha";
    die();
  }else{  
    $_SESSION['idProduto'] = $linha['idProduto'];
    $_SESSION['codBarras'] = $linha['codBarras'];
    $_SESSION['nome'] = $linha['nome'];
    $_SESSION['descricao'] = $linha['descricao'];
    $_SESSION['preco'] = $linha['preco'];
    $_SESSION['estoque'] = $linha['estoque'];
    $_SESSION['ativo'] = $linha['ativo'];
  }*/
?>
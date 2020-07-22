<?php   
    include "conexao.php";

    $sql = $conn->prepare("INSERT INTO Produtos (codBarras, nome, descricao, preco, estoque, ativo)
    VALUES (?,?,?,?,?,?)");
    $sql -> bind_param("ssssss",$CODBARRAS, $NOME, $DESCRICAO, $PRECO, $ESTOQUE, $TIPO);
    $sql -> execute() or die("ErroBanco");

    echo "Sucesso";

    $sql -> close();
    $conn -> close();

    die();
?>
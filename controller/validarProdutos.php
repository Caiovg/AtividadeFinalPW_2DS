<?php
session_start();

if(empty($_POST) || isset($_POST['name'])){
    header("Location: ../view/TelaLogin.php");
}

$NOME = $_POST['Nome'];
$CODBARRAS = $_POST['Codbarras'];
$DESCRICAO = $_POST['Descricao'];
$PRECO = $_POST['Preco'];
$ESTOQUE = $_POST['Estoque'];
$TIPO = $_POST['Tipo'];

include "../model/ValidarCamposModel.php";


if(empty($NOME || $CODBARRAS || $DESCRICAO || $PRECO || $ESTOQUE)){
    die("camposvazios");
}
if(empty($NOME)){
    die("ErroNome");
}
$linhaNome = ValidarNome($NOME);
if(!empty($linhaNome['nome'])){
    echo "ErroNomeexiste";
    die();
}
if(empty($CODBARRAS)){
    die("ErroCodbarras");
}
if(!is_numeric($CODBARRAS)){
    die("Erroletra");
}
if(strlen($CODBARRAS) != 13 || $CODBARRAS == '0000000000000'){
    die("Erronumero");
}
$linhaCodbarras = ValidarCodbarras($CODBARRAS);
if(!empty($linhaCodbarras['CODBARRAS'])){
    echo "ErroCodbarrasexiste";
    die();
}
if(empty($DESCRICAO)){
    die("ErroDescricao");
}
if(empty($PRECO)){
    die("ErroPreco");
}
if(!is_numeric($PRECO)){
    die("Erroletra1");
}
if(empty($ESTOQUE)){
    die("ErroEstoque");
}
if(!is_numeric($ESTOQUE)){
    die("Erroletra2");
}
if(empty($TIPO)){
    die("ErroTipo");
}

include "../model/CadastrarProdutos.php";
?>
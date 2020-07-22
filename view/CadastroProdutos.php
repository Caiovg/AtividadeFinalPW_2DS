<?php
session_start();

if(!isset($_SESSION['login']) || $_SESSION['login'] != true){ 
    header("Location: Telalogin.php");
    exit();    
}

if(isset($_SESSION['Tipo']) && $_SESSION['Tipo'] == "administrador"){
    header("Location: TelaAdm.php");
    exit();    
}

if(isset($_SESSION['Tipo']) && $_SESSION['Tipo'] == "cliente"){
    header("Location: TelaUsuario.php");
    exit();    
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css-padrao/css-padrao.css">
    <link rel="stylesheet" href="../css-padrao/css.css">
    <style>
        a{
            display: block;
            padding: 20px 5px;
            color: white;
        }
        a:hover{
            background-color: rgba(176,224,230);
            color: black;
        }
        nav{
            transition: all .5s;
        }
        body{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("../imagens/fundo4.jpg");
        height: 100vh;
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <br><br>
    <div class="container">
        <div class="col-lg-9 text-center mr-auto ml-auto">
            <br><br>
            <h1 class="display-4 texto titulo">Cadastre os Produtos</h1>
        </div>
        <div class="container">
        <div class="=col-lg-9 text-center mr-auto ml-auto">
            <br>
            <form action="../controller/validarProdutos.php" method="POST" id="CadastroProdutos">
                <div class="form-row">
                    <div class="col">
                        <label for="inputNome" class="texto"><h3>Nome</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="Nome" placeholder="Digite o nome do produto" name="Nome">
                    </div>
                    <div class="col">
                        <label for="" class="texto"><h3>Codigo de Barras</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="Codbarras" placeholder="Digite o codigo de barras do produto" name="Codbarras">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <br>
                        <label for="inputNomedeUsuario" class="texto"><h3>Descrição</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="Descricao" placeholder="Digite a descriçao do produto" name="Descricao">
                    </div>
                    <div class="form-group col-md-6">
                        <br>
                        <label for="inputCpf" class="texto"><h3>Preço</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="Preco" placeholder="Digite o preço do produto" name="Preco">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputNascimento" class="texto"><h3>Estoque</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="Nascimento" placeholder="Digite sua Data de nascimento" name="Estoque">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputRG" class="texto"><h3>Tipo</h3></label>
                        <select name="Tipo" class="form-control mx-sm-3">
                            <option value="Ativo"selected>Ativo</option>  
                            <option value="Inativo">Inativo</option>
                        </select>
                    </div>  
                </div>
                <br>
                <div class="form-row col-10 mx-auto mt-5 mb-5">
                    <input class="form-control btn-primary col-5 mx-auto" type="submit" value="CADASTRAR">
                    <a class="form-control btn-primary col-5 mx-auto" role="button" href="TelaFuncionario.php">VOLTAR</a>
                </div>
            </form>
        </div>
    </div>
    </div>
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
    <script src="../javascript/validar.js"></script> 
</body>
</html>    
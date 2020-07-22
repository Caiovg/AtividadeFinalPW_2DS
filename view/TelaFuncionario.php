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
    <title>Tela Funcionario</title>
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
    <div class="pos-f-t">
        <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Home <span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Home <span class="sr-only">(Página HOME)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Suaconta.php">Sua Conta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Produtos.php">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
        <nav class="navbar fixed-top navbar-light bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
    <br><br>
    <div class="container">
        <div class="=col-lg-9 text-center mr-auto ml-auto">
            <br><br>
            <h1 class="display-4 texto titulo">BEM-VINDO QUERIDO(A)
                <?php echo $_SESSION['Nome'];?> 
                <?php echo $_SESSION['Tipo'];?>
            </h1>
        </div>
        <div class="=col-lg-9 text-center mr-auto ml-auto">
            <br><br>
            <h1 class="display-4 texto titulo">Cadastre produtos</h1>
        </div>
        <div class="container">
            <div class="=col-lg-9 text-center mr-auto ml-auto">  
                <br>
                <a class="nav-link lead text-center btn btn-primary btn-lg active" role="button" href="CadastroProdutos.php">Cadastre</a>                           
            </div>
        </div>
    </div> 
</body>

    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
    <script src="../javascript/validar.js"></script>
</body>
</html>
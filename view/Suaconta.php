<?php
session_start();

if(!isset($_SESSION['login']) || $_SESSION['login'] != true){ 
    header("Location: Telalogin.php");
    exit();    
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css-padrao/css-padrao.css">
    <link rel="stylesheet" href="../css-padrao/css.css">
    <link rel="stylesheet" href="../css-padrao/cssconta.css">
    <style>
        body{
            background-color: Grey;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-attachment: fixed ;
            background-repeat: no-repeat;
            background-position: center;
        }
        .aumento{
            width: 170px;
            height: 120px;
            position: 250px;
            top: 150px;
        }
        .fundo{
            background-color: purple;
        }
        .fundo2{
            background-color: white;
        }
        .fundo3{
            color: white; 
        }
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
        .preto{
            color: black;
            font-family: Arial, Helvetica, sans-serif;
        }
        .header{
            text-align: center;
            height: 300px;
            padding: 12px;
            background-image: url("../imagens/th.jpg");
        }
        .icons{
            width: 20px;
            height: 20px;
            display: inline-block;
            background-size: cover;
        }
        .email{
            background-image: url("../imagens/gmail.png");
        }
        .facebook{
            background-image: url("../imagens/facebook.png");
        }
        .twitter{
            background-image: url("../imagens/twitter.png");
        }
        .belo{
            background-color: blue;
        }
        .belo2{
            background-color: white;
        }
        h2{
            text-align: center;
        }
        .text{
            text-align: center;
            color: white;
        }
        .diminuindo{
            width: 90px;
            height: 90px;
            border-radius: 50%;
        }
    </style>
</head>
<body class="corpo">
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
        <div class="header">
            <img class="avatar rounded-circle aumento" src="../imagens/nike.png" alt="">
            <h1 class="user-name"><?php echo $_SESSION['Nome'];?> <?php echo $_SESSION['Sobrenome'];?></h1>
        </div>
        <div class="container belo">
            <ul class="socials">
                <li class="socials-li">
                    <button type="button" class="btn btn-success btn-lg">
                        <i class="icons email"></i>
                        <a class="class-a" href="https://gmail.com/">Gmail</a>
                    </button>
                </li> 
                <li class="socials-li">
                    <button type="button" class="btn btn-success btn-lg">
                        <i class="icons facebook"></i>
                        <a class="class-a" href="https://facebook.com/">Facebook</a>
                    </button>
                </li>
                <li class="socials-li">
                    <button type="button" class="btn btn-success btn-lg">
                        <i class="icons twitter"></i>
                        <a class="class-a" href="https://twitter.com/@Caiovin58266154">Twitter</a>
                    </button>
                </li>
            </ul>
        <div class="belo2">
            <div class="about">
                <h2>Dados Pessoais</h2>
            </div>
            <br>
            <div class="form-row">
                <div class="col">
                    <label for="" class="">NOME</label>
                    <br>
                    <div class="container campo">
                        <p class="text"><?php echo $_SESSION['Nome'];?></p>
                    </div>
                </div>
                <div class="col">
                    <label for="" class="">SOBRENOME</label>
                    <br>
                    <div class="container campo">
                        <p class="text"><?php echo $_SESSION['Sobrenome'];?></p>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="form-row">
                <div class="col">
                    <label for="" class="">RG</label>
                    <br>
                    <div class="container campo">
                        <p class="text"><?php echo $_SESSION['RG'];?></p>
                    </div>
                </div>
                <div class="col">
                    <label for="" class="">CPF</label>
                    <br>
                    <div class="container campo">
                        <p class="text"><?php echo $_SESSION['CPF'];?></p>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="form-row">
                <div class="col">
                    <label for="" class="">DATA NASCIMENTO</label>
                    <br>
                    <div class="container campo">
                        <p class="text"><?php echo $_SESSION['Nascimento'];?></p>
                    </div>
                </div>
                <div class="col">
                    <label for="" class="">CELULAR</label>
                    <br>
                    <div class="container campo">
                        <p class="text"><?php echo $_SESSION['Celular'];?></p>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="form-row">
                <div class="col">
                    <label for="" class="">ENDEREÇO</label>
                    <br>
                    <div class="container campo">
                        <p class="text"><?php echo $_SESSION['Endereco'];?></p>
                    </div>
                </div>
                <div class="col">
                    <label for="" class="">NUMERO</label>
                    <br>
                    <div class="container campo">
                        <p class="text"><?php echo $_SESSION['Numero'];?></p>
                    </div>
                </div>
                <div class="col">
                    <label for="" class="">COMPLEMENTO</label>
                    <br>
                    <div class="container campo">
                        <p class="text">....</p>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="container belo">
                <ul class="socials">
                    <li class="socials-li">
                        <button type="button" class="btn btn-danger btn-lg">Alterar</button>
                    </li>
                    <li class="socials-li">
                        <button type="button" class="btn btn-danger btn-lg">Confirmar</button>
                    </li>
                </ul>>
            </div>
        </div>
    </div>
    <br><br>

    
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>
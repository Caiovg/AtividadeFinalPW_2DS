<?php
session_start();
include "../model/BuscarProdutos.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css-padrao/css-padrao.css">
    <link rel="stylesheet" href="../css-padrao/css.css">
    <style>
    body{
            background-image:url('../imagens/fundo4.jpg');
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-attachment: fixed ;
            background-repeat: no-repeat;
            background-position: center;
            overflow-x:hidden;/* tira o scroll de baixo*/
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
        h1{
            text-align: center;
        }
        h4{
            color: black;
        }
        h5{
            color: white;
        }
        p{
            color: black;
            padding: 10px 5px;
            font-family: Arial, Helvetica, sans-serif;
        }
        .naverr{
            width: 100%; 
            color: black;
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
            width: 100%;
        }
           
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Produtos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="TelaLogin.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Suaconta.php">Sua Conta</a>
      </li>
    </ul>
  </div>

    </nav>
    <nav class="navbar navbar-light bg-light">
        <h1 class="display-1 texto titulo preto">PRODUTOS</h1>
    </nav>
    <br><br>
    <div class="row">
    <?php while($rows_produtos = mysqli_fetch_assoc($resultado_produtos)){ ?>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="../imagens/nike.png" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Responsive image">
                <!--<img src="<?php// echo $rows_produtos["foto"]; ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Responsive image">-->
                <div class="card-body">
                    <h3 class="card-text"><?php echo $rows_produtos["nome"]; ?></h3>  
                    <p class="card-text"><?php echo $rows_produtos["descricao"]; ?></p>
                    <h3 class="card-text">Valor: R$<?php echo $rows_produtos["preco"]; ?>,00</h3>
                    <br>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <button type="button" href="TelaLogin.php" class="btn btn-lg btn-block btn-outline-primary">Comprar</button>
                        </div>
                        <small class="text-muted">EM ESTOQUE: <?php echo $rows_produtos["estoque"]; ?></small>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</body>

<script src="../node_modules/jquery/dist/jquery.js"></script>
<script src="../node_modules/popper.js/dist/umd/popper.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="../node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
<script src="../javascript/validar.js"></script>
</html>
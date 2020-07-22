<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela login</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css-padrao/css-padrao.css">
    <style>
        body{
            background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('../imagens/fundo4.jpg');
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-attachment: fixed ;
            background-repeat: no-repeat;
            background-position: center;
        }
        .login{
           border: 2px solid #000;
           border-radius: 20px 20px 20px 20px;
        }
    </style>
</head>
<body>
<div class="mt-5">
        <div class="w-50 h-100 mx-auto bg-white login">
            <h1 class="text-center text-dark">BEM-VINDO</h1>
            <h2 class="text-center text-dark">FAÇA LOGIN E COMECE A TRABALHAR</h2>
            <form action="../controller/validarLoginFuncionario.php" method="POST" id="login">
                <div class="form-row col-10 mx-auto mt-5">
                    <label class="lead col-4" for="">Usuário ou Email</label>
                    <input class="form-control col-8" type="text" 
                    placeholder="Digite aqui seu email ou usuário" name="name" id="user"
                    value="">
                    <div class="col-4"></div>
                </div>
                <div class="form-row col-10 mx-auto mt-3 mb-5">
                    <label class="lead col-4" for="">Senha</label>
                    <input class="form-control col-8" type="password" 
                    placeholder="Digite aqui sua senha" name="pass" id="pass">
                    <div class="col-4"></div>
                </div>
                <div class="form-row col-10 mx-auto mt-5 mb-5">
                    <input class="form-control btn-outline-success col-5 mx-auto" type="submit"  name="entrar" value="ENTRAR">
                </div>                                   
                    <div>
                        <div>
                            <a class="nav-link lead text-center btn btn-primary btn-lg active" role="button" href="#">Esqueci minha senha</a>
                        </div>
                    </div>                                                                                          
            </form>
        </div>
    </div>
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
    <script src="../javascript/validar.js"></script>
</body>
</html>
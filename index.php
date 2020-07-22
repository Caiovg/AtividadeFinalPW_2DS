<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css-padrao/css-padrao.css">
    <link rel="stylesheet" href="css-padrao/css.css">
    <link rel="stylesheet" href="css-padrao/csshome.css">
    <style>
        header{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("imagens/fundo4.jpg");
        height: 100vh;
        background-size: cover;
        background-position: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="main">
            <div class="logo">
                <img src="imagens/nike.png" alt="">
            </div>
            <ul>
                <li><a class="nav-link active" href="#">Home</a></li>
                <li><a class="nav-link" href="view/Produtos.php">Produtos</a></li>
                <li><a class="nav-link" href="view/TelaCadastro.php">Cadastra-se</a></li>
                <li><a class="nav-link" href="view/TelaLogin.php">Login</a></li>
                <li><a class="nav-link" href="view/TelaLoginFuncionario.php">Colaborador</a></li>
            </ul>
        </div>
        <div class="title mx-auto">
            <h1 class="text-center text">BEM VINDO</h1>
            <h1 class="text-center text">AO NOSSO SITE</h1>

        </div>
        <div class="but form-row col-20 mx-auto mt-5 mb-5">
        <ul class="socials">
                <li class="socials-li">
                    <button type="button" class="btn btn-lg">
                        <i class="icons email"></i>
                        <a class="class-a" href="https://gmail.com/" target="_blank">Gmail</a>
                    </button>
                </li> 
                <li class="socials-li">
                    <button type="button" class="btn btn-lg">
                        <i class="icons facebook"></i>
                        <a class="class-a" href="https://facebook.com/" target="_blank">Facebook</a>
                    </button>
                </li>
                <li class="socials-li">
                    <button type="button" class="btn btn-lg">
                        <i class="icons twitter"></i>
                        <a class="class-a" href="https://twitter.com/" target="_blank">Twitter</a>
                    </button>
                </li>
            </ul>
        </div>
    </header>


    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>
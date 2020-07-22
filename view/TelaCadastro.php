<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Cadastro</title>
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
    <script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="../node_modules/jquery/dist/jquery.mask.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#CPF").mask("000.000.000-00")
        $("#Nascimento").mask("00/00/0000")
        $("#RG").mask("00.000.000-00")
        $("#Celular").mask("(00)00000-0000")
    })
    </script>
</head>
<body class="corpo">
    <div class="pos-f-t">
        <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                        <a class="nav-link" href="#">esquece que não deu certo.
                         e programador tambem vive de ganbiarra <span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Home <span class="sr-only">(Página HOME)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Telalogin.php">Login</a>
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
            <h1 class="display-4 texto titulo">CADASTRA-SE</h1>
            <br><br>
            <form action="../controller/validarCadastro.php" method="POST" id="Cadastro" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col">
                        <label for="inputNome" class="texto"><h3>Nome</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="Nome" placeholder="Digite seu Nome" name="Nome">
                    </div>
                    <div class="col">
                        <label for="" class="texto"><h3>Sobrenome</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="Sobrenome" placeholder="Digite seu Sobrenome" name="Sobrenome">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <br>
                        <label for="inputNomedeUsuario" class="texto"><h3>Nome de Usuario</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="NomedoUsuario" placeholder="Digite seu Nome de Úsuario" name="NomedoUsuario">
                    </div>
                    <div class="form-group col-md-6">
                        <br>
                        <label for="inputCpf" class="texto"><h3>CPF</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="CPF" placeholder="Digite seu CPF" name="CPF">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputNascimento" class="texto"><h3>Nascimento</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="Nascimento" placeholder="Digite sua Data de nascimento" name="Nascimento" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputRG" class="texto"><h3>RG</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="RG" placeholder="Digite seu RG" name="RG">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="texto"><h3>Email</h3></label>
                        <br>
                        <input type="email" class="form-control mx-sm-3" id="Email" placeholder="Digite Seu Email" name="Email">
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputCelular" class="texto"><h3>Celular</h3></label>
                        <input type="telefone" id="Celular" class="form-control mx-sm-3" placeholder="Digite seu numero de Celular" name="Celular">
                    </div>  
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEndereco" class="texto"><h3>Endereço</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="Endereco" placeholder="Digite Seu Endereço" name="Endereco">
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputNumero" class="texto"><h3>Numero</h3></label>
                        <input type="text" id="Numero" class="form-control mx-sm-3" placeholder="Digite o numero do seu endereço" name="Numero">
                    </div>  
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword6" class="texto"><h3>Senha</h3></label>
                        <input type="password" id="Senha" class="form-control mx-sm-3" placeholder="Digite sua senha" aria-describedby="passwordHelpInline" name="Senha">
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputPassword6" class="texto"><h3>Confime sua Senha</h3></label>
                        <input type="password" id="Confisenha" class="form-control mx-sm-3" placeholder="Digite confirme sua senha" aria-describedby="passwordHelpInline" name="Confisenha">
                    </div>  
                </div>
                <div class="form-row col-10 mx-auto mt-5 mb-5">
                    <input class="form-control btn-primary col-5 mx-auto" type="submit" value="CADASTRA-SE">
                </div>
            </form>
        </div>
    </div>
    
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
    <script src="../javascript/validar.js"></script>
</body>
</html>
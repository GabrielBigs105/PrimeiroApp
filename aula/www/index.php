<!DOCTYPE html>

<html>
    <head>
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <title>Hello World</title>
    </head>
    <body>
        <div id="telalogin" class="page">
            <button>oii</button>
        <a href="tela2.php">ir pra outra tela</a>

            <div class="painel-login">
                <div class="painel-herder">
                    <img class="fotoLogin" src="img/login.png">
                </div>
                <input type="text" class="form-login" placeholder="Insira seu login">
                <input type="password" class="form-login" placeholder="Insira sua senha">
                <div>
                    <button class="btn btn-primary">Entrar</button>
                    <button class="btn btn-success">Criar conta</button>
                </div>

            </div>
        </div>
        <div id="telausuario" class="hidden page"> 
            <div class="navbar"><span>Bem Vindo Jean Gabriel</span> </div>
            <div class="conteudo">
                <ul class="lista">
                    <li class="item-lista">Jean Gabriel</li>
                    <li class="item-lista">Joao Pedro</li>
                    <li class="item-lista">Saulo Uasabi</li>
                </ul>
            </div>
            <button class="btnfooter">Cadastrar novo Usuario</button>
        </div>
        <div id="telaload" class="hidden page">
           <img class="img-load"src="img/cubeload.svg">
        </div>
        <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
    </body>
</html>

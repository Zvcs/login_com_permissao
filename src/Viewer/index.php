<?php

require '../../vendor/autoload.php';

use src\login\Conection\Sessao;

Sessao::mataSessao();

?>
<html>
    <head>
        <title>Pagina inicial</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <body>
                    <div class="container">
            <div class="col-px-md-6">
                <div class="configdiv">
                    <h3>Bem vindo a pagina onde voce pode realizar o login e se cadastrar</h3>
                </div>
            </div>
            <div class="col-px-md-6">
                <div class="configdiv">
                    <button class="btn btn-lg btn-success btn-block"><a class="link-light" href="../Viewer/cadastrar.php" >Cadastrar</a></button>
                    <button class="btn btn-lg btn-success btn-block"><a class="link-light" href="../Viewer/login.php">Login</a></button>
                </div>
            </div>
        </div>
        </body>
    </head>
</html>
<?php

require '../../vendor/autoload.php';

use src\login\Conection\Sessao;

Sessao::mataSessao();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pagina para realizar o login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                              <div class="panel-heading">
                                <h3 class="panel-title">Login</h3>
                             </div>
                              <div class="panel-body">
                                <form accept-charset="UTF-8" role="form" method="post" action="../Controller/RealizaLogin.php">
                                <fieldset>
                                      <div class="form-group">
                                        <input class="form-control" placeholder="Nome" name="nome" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Senha" name="senha" type="password" value="">
                                    </div>
                                    <br>
                                    <input class="btn btn-lg btn-success btn-block" type="submit" value="Entrar">
                                </fieldset>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </head>
</html>
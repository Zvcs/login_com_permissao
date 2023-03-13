<?php


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <body>

        <form accept-charset="UTF-8" role="form" method="post" action="../Controller/mensagem.php">
                                <fieldset>
                                      <div class="form-group">
                                        <input class="form-control" placeholder="Digite sua mensagem" name="mensage" type="text">
                                    </div>
                                    <input class="btn btn-lg btn-success btn-block" type="submit" value="Enviar">
                                </fieldset>
         </form>
        </body>
    </head>
</html>
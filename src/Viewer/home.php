<?php

require '../../vendor/autoload.php';

use src\login\Conection\Sessao;
use src\login\Helper\UsuarioConstantes;
use src\login\Repository\MensagemRepository;

Sessao::inicio();

if ($_SESSION['nome'] == null || $_SESSION['id'] == null) {
    header('Location: ../Viewer/PrecisaLogin.php');
    exit();
}

$mensagens = new MensagemRepository();

if ($_SESSION['permissao'] == UsuarioConstantes::ESCRITOR) {
    $mensagensarr = $mensagens->exibeMensagemUsuario($_SESSION['id']);
}else {
    $mensagensarr = $mensagens->exibeTodasMensagens();
}
?>

<html>
    <head>
        <body>
            <?php foreach ($mensagensarr as $registro) {
                echo "<div class='list-group-item'>";

                echo "<h4 class='list-group-item-heading'>" . $registro->nome .
                "<small> - Para Excluir o texto, clique em seu número".
                "</small><form method ='post' action = '../Controller/ExcluiMensagem.php'>
                <input type='submit' placeholder='Excluir' class='btn btn-default btn-xs btn_del_tweet pull-right'
                name='Excluir' value='" . $registro->id . "'></form></h4>";

                echo "<p class='list-group-item-text' style='font-size: 17px; word-wrap: break-word;'>"
                . $registro->mensagem . "</p> </div><br>";
            }
            if ($_SESSION['permissao'] == UsuarioConstantes::ESCRITOR){
                 echo "
                        <form accept-charset=\"UTF-8\" role=\"form\" method=\"post\" action=\"../Controller/InsereMensagem.php\">
                                                <fieldset>
                                                    <div class=\"form-group\">
                                                    </br>
                                                        <input class=\"form-control\" placeholder=\"Digite sua mensagem\" name=\"texto\" type=\"text\">
                                                    </div>
                                                    </br>
                                                    <input class=\"btn btn-lg btn-success btn-block\" type=\"submit\" value=\"Enviar\">
                                                </fieldset>
                        </form>

    <button class=\"btn-group-toggle\"><a href=\"../Viewer/login.php\">Sair</a></button>";
            }
            ?>
        </body>
    </head>
</html>
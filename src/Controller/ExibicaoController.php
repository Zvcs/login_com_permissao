<?php

namespace src\login\exibicao;

use src\login\conectar\Conectar;
use src\login\constantes\ConstantesLogin;

include_once ('../Controller/Conectar.php');

class ExibicaoController extends Conectar
{


    public function __construct(private int $id,private string $permissao)
    {
    }

    public function recuperaMensagem()
        {
        if ($this->permissao == ConstantesLogin::ESCRITOR) {
            $resultado = $this->exibeMensagem($this->id);

            if ($resultado) {
                while ($registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

            if ($registro['id_usuario'] == $this->id) {

                // para cada registro(tweet) é criado um item do list-group da div
                echo "<div class='list-group-item'>";

                echo "<h4 class='list-group-item-heading'>" . $registro['nome'] .
                "<small> - Para Excluir o texto, clique em seu número".
                "</small><form method ='post' action = '../Controller/Excluir.php'>
                <input type='submit' placeholder='Excluir' class='btn btn-default btn-xs btn_del_tweet pull-right'
                name='Excluir' value='" . $registro['id'] . "'></form></h4>";

                echo "<p class='list-group-item-text' style='font-size: 17px; word-wrap: break-word;'>"
                . $registro['texto'] . "</p> </div><br>";

            } else {

                echo "<div class='list-group-item'>";

                echo "<h4 class='list-group-item-heading'>" . $registro['nome'] . "</h4>";

                echo "<p class='list-group-item-text' style='font-size: 17px;'>" . $registro['texto'] . "</p>";
                echo "</div><br>";
            }


            }

            }
            echo "<!DOCTYPE html>
                <html>
                    <head>
                        <title>Home Page</title>
                        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
                        <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
                        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>
                        <body>

                        <form accept-charset=\"UTF-8\" role=\"form\" method=\"post\" action=\"../Controller/mensagem.php\">
                                                <fieldset>
                                                    <div class=\"form-group\">
                                                    </br>
                                                        <input class=\"form-control\" placeholder=\"Digite sua mensagem\" name=\"mensage\" type=\"text\">
                                                    </div>
                                                    </br>
                                                    <input class=\"btn btn-lg btn-success btn-block\" type=\"submit\" value=\"Enviar\">
                                                </fieldset>
                        </form>
                        
    <button class=\"btn-group-toggle\"><a href=\"../Viewer/login.php\">Sair</a></button>
                        </body>
                    </head>
                </html>";

        }else {
            $resultado = $this->exibeTodasMensagens();

            if ($resultado) {
                while ($registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

            // verifica se o registro (tweet) da iteração pertence ao usuario logado, se sim, será incluido o botão excluir tweet
            if ($registro['id_usuario']) {

                // para cada registro(tweet) é criado um item do list-group da div
                echo "<div class='list-group-item'>";

                // contendo um cabeçalho onde terá nome do usuário, a data de inclusão do tweet e um botão excluir tweet para os do usuario logado
                echo "<h4 class='list-group-item-heading'>" . $registro['nome'] . "<small> - Para Excluir o texto, clique em seu número". "</small><form method ='post' action = '../Controller/Excluir.php'> <input type='submit' placeholder='Excluir' class='btn btn-default btn-xs btn_del_tweet pull-right' name='Excluir' value='" . $registro['id'] . "'></form></h4>";

                // por fim, um paragrafo onde conterá o tweet em si
                echo "<p class='list-group-item-text' style='font-size: 17px; word-wrap: break-word;'>" . $registro['texto'] . "</p>";
                echo "</div><br>";

            } else {

                echo "Não há mensagens para serem exibidas";
            }
            }
            }
        }
        }
}

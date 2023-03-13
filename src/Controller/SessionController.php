<?php

namespace src\login\sessao;


class Sessao
{
    public static function inicio(): void
    {
        session_start();
    }

    public static function verificaLogin(): string
    {
        self::inicio();
        if (isset($_SESSION['nome']) == null || isset($_SESSION['senha']) == null) {
            //ARRUMAR O $MESSAGE PARA CONDIZER COM O NOVO TREM
            $message = "<h1> É necessário fazer o login para acessar essa página</h1><br>
            <button class=\"btn-group-toggle\"><a href=\"../Viewer/login.php\">Login</a></button>";

            return $message;
        }

        //ARRUMAR O $MESSAGE PARA CONDIZER COM O NOVO TREM
        $message = " <div class=\"container\">
        <div class=\"col-px-md-6\">
            <div class=\"configdiv\">
                <h3>Parabens voce acessou a pagina!</h3><br>
            </div>
        </div>
       <h1>Agora sai</h1><br>
       <button class=\"btn-group-toggle\"><a href=\"../Viewer/index.php\">Voltar a pagina inicial</a></button>
    </div>";

    return $message;
    }

    public static function iniciaSessao(int $id, string $nome, string $permissao)
    {
        self::inicio();
        $_SESSION['nome'] = $nome;
        $_SESSION['id'] = $id;
        $_SESSION['permissao'] = $permissao;
    }

    public static function mataSessao(): void
    {
        self::inicio();
        unset($_SESSION['nome']);
        unset($_SESSION['id']);
        unset($_SESSION['permissao']);
    }
}
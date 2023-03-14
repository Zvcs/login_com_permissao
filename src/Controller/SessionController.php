<?php

namespace src\login\sessao;


class Sessao
{
    public static function inicio(): void
    {
        session_start();
    }

    public static function verificaLogin(): int
    {
        if (isset($_SESSION['nome']) == null || isset($_SESSION['id']) == null ||
          isset($_SESSION['permissao']) == null) {
            return 0;
           
        }else {
            return 1;
        }


    }

    public static function iniciaSessao(int $id, string $nome, string $permissao): void
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
<?php

namespace src\login\Conection;

require '../../vendor/autoload.php';

class Sessao
{
    public function __construct()
    {
    }

    public static function inicio(): void
    {
        session_start();
    }

    public function iniciaSessao(int $id, string $nome, string $permissao): void
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

<?php

namespace src\login\conectar;

use src\login\banco\Banco;
use src\login\sessao\Sessao;
use src\login\constantes\ConstantesLogin;
use mysqli;

include_once ('../Model/Usuario.php');
include_once ('../Helper/UsuariosConstantes.php');
include_once ('../Controller/UsuarioController.php');
include_once ('../Helper/BancoConstantes.php');
include_once ('../Controller/SessionController.php');

class Conectar
{

    protected function cadastra(string $nome, string $senha, string $permissao): string
    {
        $conn = $this->conexao();

        $sql = "INSERT INTO usuarios (nome, senha, permissao)
        VALUES ('{$nome}', '{$senha}', '{$permissao}')";

        if (!mysqli_query($conn, $sql)) {
            return "n foi";
        }

        return "foi";
    }

    protected function login(string $nome, string $senha): int
    {
        $conn = $this->conexao();

        $sql = "SELECT id, nome, permissao FROM usuarios where nome = '{$nome}' AND senha = '{$senha}'";

        $result = mysqli_query($conn, $sql);
        

        if (mysqli_num_rows($result) > 0) {
            $sqlarrayretorno = mysqli_fetch_row($result);
            Sessao::iniciaSessao($sqlarrayretorno[0], $sqlarrayretorno[1], $sqlarrayretorno[2]);
            return 1;
        }

        Sessao::mataSessao();
        return 0;
    }

    protected function insereMensagem(string $nome, string $texto, int $id)
    {
        $conn = $this->conexao();

        $sql = "INSERT INTO mensagens (nome, texto, id_usuario) VALUES ('{$nome}' , '{$texto}' , {$id})";

        if (!mysqli_query($conn, $sql)) {
            return "n foi";
        }

        return "foi";

    }

    private function conexao(): mysqli
    {
        $conn = new mysqli(Banco::SERVERHOST, Banco::USER, Banco::PASSWORD, Banco::SERVERNAME);

        if ($conn->connect_error) {
            die("Connection failed: "
        . $conn->connect_error);
        }

        return $conn;
    }
}

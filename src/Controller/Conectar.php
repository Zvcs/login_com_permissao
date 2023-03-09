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
        //session_start();
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

   protected function insereMensagem(string $mensagem, int $id, string $nome)
   {
        $conn = $this->conexao();

        $sql = "INSERT INTO mensagens (mensagem, id, nome) VALUES ('{$mensagem}' , '{$id}' , '{$nome}')";

        if (mysqli_query($conn, $sql)) {
            return 'mensagem cadastrada';
        }

        return 'Não foi cadastrada';
   }

   protected function deletaMensagem(int $id, string $permissao)
   {
        $conn = $this->conexao();
        //RECUPERAR O ID DA MENSAGEM
        //VALIDAR PERMISSÃO E DELETAR A MENSAGEM

        $sql = "DELETE FROM usuarios WHERE id = {$id}";
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

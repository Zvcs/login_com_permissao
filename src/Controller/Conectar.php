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

        $sql = "SELECT * FROM usuarios where nome = '{$nome}' AND senha = '{$senha}'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            //Sessao::iniciaSessao($nome, $senha);
            return 1;
        }

        //Sessao::mataSessao();
        return 0;
    }

   /* protected function insereTexto(int $id, string $texto, string $permissao)
    {
        if ($permissao == ConstantesLogin::LEITOR) {
            return 'Usuario não pode escrever';
        }

        $this->insereSQLtexto($id, $texto);
    }

    protected function deletaTexto(?int $id, string $permissao)
    {
        if ($permissao == ConstantesLogin::ADMIN) {
            $this->deletaSQLtexto($id);
        }
    }*/

    private function conexao(): mysqli
    {
        $conn = new mysqli(Banco::SERVERHOST, Banco::USER, Banco::PASSWORD, Banco::SERVERNAME);

        if ($conn->connect_error) {
            die("Connection failed: "
        . $conn->connect_error);
        }

        return $conn;
    }
    /*
    private function insereSQLtexto(int $id, string $texto)
    {

    }

    private function deletaSQLtexto(int $id = null)
    {

    }

    private function recupetaSQLTexto(int $id)
    {
        
    }

    private function recuperaTodosSQLtexto()
    {

    }
    */
}

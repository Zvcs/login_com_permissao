<?php

namespace src\login\Repository;

require '../../vendor/autoload.php';

use PDO;
use src\login\Conection\Conectar;
use src\login\Conection\Sessao;
use src\login\Entity\Usuario;

class UsuarioRepository
{
    private PDO $conn;

    public function __construct()
    {
        $this->conn = Conectar::conectar();
    }

    public function cadastraUsuario(string $nome, string $senha, string $permissao): void
    {
        $sql = "INSERT INTO usuarios (nome, senha, permissao) VALUES (?, ?, ?);";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $senha);
        $stmt->bindValue(3, $permissao);
        if ($stmt->execute()) {
            header('Location: ../Viewer/index.php?sucess=1');
            exit();
        }

        header('Location: ../Viewer/Login.php');
    }

    public function realizaLogin(string $nome, string $senha): void
    {
        $sql = "SELECT id, nome, permissao FROM usuarios where nome = ? AND senha = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $senha);
        $stmt->execute();
        if ($stmt->rowCount() > 0){
            $usuario = $this->trataUsuario($stmt->fetch(PDO::FETCH_ASSOC));
            Sessao::iniciaSessao($usuario->recuperaId(), $usuario->recuperaNome(), $usuario->recuperaPermissao());
            header('Location: ../Viewer/home.php?sucess=1');
            exit();
        }
        header('Location: ../Viewer/login.php?sucess=0');
    }

    private function trataUsuario(array $dadosUsuarios): Usuario
    {
        return new Usuario($dadosUsuarios['nome'], $dadosUsuarios['senha'], $dadosUsuarios['permissao'], $dadosUsuarios['id']);

    }

}

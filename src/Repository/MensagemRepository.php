<?php

namespace src\login\Repository;

require '../../vendor/autoload.php';

use PDO;
use src\login\Conection\Conectar;
use src\login\Entity\Mensagem;


class MensagemRepository
{
    private PDO $conn;

    public function __construct()
    {
        $this->conn = Conectar::conectar();
    }

    public function insereMensagem(string $nome, string $texto, int $id): void
    {
        $sql = "INSERT INTO mensagens (nome, texto, id_usuario) VALUES (? , ? , ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $texto);
        $stmt->bindValue(3, $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            header('Location: ../Viewer/home.php');
            exit();
        }

        header('Location: ../Viewer/home.php');
    }

    /**
     * @return Mensagens[]
     */
    public function exibeTodasMensagens(): array
    {

        $mensagens = $this->conn->query('SELECT * FROM mensagens')->fetchAll(\PDO::FETCH_ASSOC);
        return array_map($this->trataMensagem(...), $mensagens);
    }

    /**
     * @return Mensagens[]
     */
    public function exibeMensagemUsuario(int $id): array
    {
        $sql = "SELECT * FROM mensagens WHERE id_usuario = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $mensagens = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return array_map($this->trataMensagem(...), $mensagens);
    }

    public function deletaMensagem(int $id): void
    {
        $sql = "DELETE FROM mensagens WHERE id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            header('Location: ../Viewer/home.php?sucess=2');
            exit();
        }

        header('Location: ../Viewer/home.php?sucess=00');

    }

    protected function trataMensagem(array $listaMensagens): Mensagem
    {
        return new Mensagem($listaMensagens['id'], $listaMensagens['nome'], $listaMensagens['texto']);
    }
}

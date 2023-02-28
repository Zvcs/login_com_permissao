<?php

namespace src\login\UsuarioController;

use src\login\usuario\Usuario;
use src\login\conectar\Conectar;
use mysqli;

class Pessoa
{
    /*
    public function __construct(private string $nome, private string $senha, private string $permissao)
    {
    }

    private function conectaBanco()
    {
        Conectar::conexao();
    }

    public function cadastraUsuario()
    {
        $conn = $this->conectaBanco();

        if ($this->nome == '' || $this->nome == null || $this->senha == '' || $this->senha == null) {
            $sql = "INSERT INTO usuarios (nome, senha, permissao) VALUES
            ('{$this->nome}', '{$this->senha}', '{$this->permissao}')";

            if (!mysqli_query($conn, $sql)) {
                return "<h1> Não foi possível cadastrar o usuário! Tente novamente </h1><br>
                Cadastre novamente a partir do botão:
                <button class=\"btn-group-toggle\"><a href=\"../Viewer/cadastrar.php\">Cadastrar</a></button>";
            }
    
        }

        
    }
*/
}
<?php

namespace src\login\UsuarioController;

use src\login\usuario\Usuario;
use src\login\conectar\Conectar;
use src\login\modal\Modal;

include_once ('../Model/Usuario.php');
include_once ('../Controller/Conectar.php');
include_once ('../Helper/Modais.php');

class UsuarioController extends Conectar
{
    private $nome;
    private $senha;
    private $permissao = null;

    public function __construct(private Usuario $usuario)
    {
        $this->nome = $usuario->getNome();
        $this->senha = $usuario->getSenha();
        $this->permissao = $usuario->getPermissao();
    }

    public function cadastraUsuario(): string
    {
        if ($this->nome == '' || $this->nome == null || $this->senha == '' ||
        $this->senha == null || $this->permissao == '' || $this->permissao == null) {
            header('Location: ../Viewer/cadastrar.php');
            return Modal::MODAL_ERRO_CADASTRO;
        }
        return $this->cadastra($this->nome, $this->senha, $this->permissao);

    }

    public function realizaLogin(): void
    {
        $login = $this->login($this->nome, $this->senha);
        if ($login) {
            header('Location: ../Viewer/home.php');
            exit;
        }
        header('Location: ../Viewer/login.php');
    }


}

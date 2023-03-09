<?php

namespace src\login\UsuarioController;

use src\login\usuario\Usuario;
use src\login\conectar\Conectar;

include_once ('../Model/Usuario.php');
include_once ('../Controller/Conectar.php');


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
            return "Variavel vazia";
        }
        return $this->cadastra($this->nome, $this->senha, $this->permissao);

    }

    public function realizaLogin()
    {
        $login = $this->login($this->nome, $this->senha);
        if ($login) {
            return 'foi';
        }
        return 'foi n';
    }


}

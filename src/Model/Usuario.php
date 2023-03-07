<?php

namespace src\login\usuario;

class Usuario
{
    public function __construct(private string $nome, private string $senha, private $permissao = '')
    {

    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function getPermissao(): string
    {
        return $this->permissao;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function setSenha($senha): void
    {
        $this->senha = $senha;
    }

    public function setPermissao($permissao): void
    {
        $this->permissao = $permissao;
    }

    public function getDadosUsuario(): string
    {
        return "O usuario {$this->nome} é um usuario {$this->permissao}";
    }
}

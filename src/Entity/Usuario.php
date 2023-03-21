<?php

namespace src\login\Entity;

require '../../vendor/autoload.php';

class Usuario
{
    public function __construct(private string $nome, private ?string $senha,
    private string $permissao, private int $id
    )
    {
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaSenha(): string
    {
        return $this->senha;
    }

    public function recuperaPermissao(): string
    {
        return $this->permissao;
    }

    public function recuperaId(): int
    {
        return $this->id;
    }
}

<?php

namespace src\login\Entity;

require '../../vendor/autoload.php';

class Mensagem
{
    public readonly int $id;
    public readonly string $nome;
    public readonly string $mensagem;

    public function __construct( int $id, ?string $nome, ?string $mensagem)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->mensagem = $mensagem;
    }

    public function recuperaMensagem(): string
    {
        return $this->mensagem;
    }

    public function recuperaId(): string
    {
        return $this->id;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }
}

<?php

namespace src\login\Mensagem;

class Mensagem
{
    public function __construct(private string $mensagem, private int $id, private string $nome)
    {
    }

    public function getMensagem()
    {
        return $this->mensagem;
    }

    public function getid()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }


    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}

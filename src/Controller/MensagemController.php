<?php

namespace src\login\MensagemController;

use src\login\mensagem\Mensagem;
use src\login\conectar\Conectar;

include_once ('../Model/Mensagem.php');
include_once ('../Controller/Conectar.php');


class MensagemController extends Conectar
{
    private string $texto;
    private int $id;
    private string $nome;

    public function __construct(Mensagem $mensagem)
    {
        $this->texto = $mensagem->getMensagem();
        $this->id = $mensagem->getid();
        $this->nome = $mensagem->getNome();
    }

     public function enviaMensagem()
    {
        return $this->insereMensagem($this->nome, $this->texto, $this->id);
    }

}

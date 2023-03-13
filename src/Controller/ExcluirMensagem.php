<?php

namespace src\login\excluir;

use src\login\conectar\Conectar;
use src\login\constantes\ConstantesLogin;

include_once ('../Controller/ExibicaoController.php');
include_once ('../Controller/Conectar.php');
include_once ('../Helper/UsuariosConstantes.php');

class ExcluirMensagem extends Conectar
{
    public function __construct(private int $id, private string $permissao)
    {
    }

    public function excluiMensagem()
    {
        if ($this->permissao == ConstantesLogin::ADMIN || $this->permissao == ConstantesLogin::ESCRITOR) {
            $this->deletaMensagem($this->id);
        } else{

        }

    }
}
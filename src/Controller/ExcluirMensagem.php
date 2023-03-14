<?php

namespace src\login\excluir;

use src\login\conectar\Conectar;
use src\login\constantes\ConstantesLogin;
use src\login\modal\Modal;

include_once ('../Controller/ExibicaoController.php');
include_once ('../Controller/Conectar.php');
include_once ('../Helper/UsuariosConstantes.php');
include_once ("../Helper/Modais.php");

class ExcluirMensagem extends Conectar
{
    public function __construct(private int $id, private string $permissao)
    {
    }

    public function excluiMensagem(): void
    {
        if ($this->permissao == ConstantesLogin::ADMIN || $this->permissao == ConstantesLogin::ESCRITOR) {
            $this->deletaMensagem($this->id);
        }else {
            Modal::MODAL_ERRO_PERMISSAO;
            header('Location: ../Viewer/home.php');
        }
    }
}
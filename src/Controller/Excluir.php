<?php

use src\login\excluir\ExcluirMensagem;
use src\login\sessao\Sessao;

include_once ('../Controller/SessionController.php');
include_once ('../Controller/ExcluirMensagem.php');

Sessao::inicio();

$excluir = new ExcluirMensagem($_POST['Excluir'], $_SESSION['permissao']);

$excluir->excluiMensagem();
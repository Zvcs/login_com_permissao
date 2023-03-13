<?php

use src\login\exibicao\ExibicaoController;
use src\login\sessao\Sessao;

include_once ('../Controller/SessionController.php');
include_once ('../Controller/ExibicaoController.php');

Sessao::inicio();
$exibir = new ExibicaoController($_SESSION['id'], $_SESSION['permissao']);

$exibir->recuperaMensagem();


?>
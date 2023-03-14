<?php

use src\login\exibicao\ExibicaoController;
use src\login\sessao\Sessao;

include_once ('../Controller/SessionController.php');
include_once ('../Controller/ExibicaoController.php');

Sessao::inicio();
$logado = Sessao::verificaLogin();
if ($logado) {
    $exibir = new ExibicaoController($_SESSION['id'], $_SESSION['permissao']);

    $exibir->recuperaMensagem();
}else {
    echo "<h1> É necessário fazer o login para acessar essa página</h1><br>
    <button class=\"btn-group-toggle\"><a href=\"../Viewer/login.php\">Login</a></button>";
    }

?>

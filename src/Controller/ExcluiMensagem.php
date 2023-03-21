<?php

namespace src\login\Controller;

use src\login\Conection\Sessao;
use src\login\Helper\UsuarioConstantes;
use src\login\Repository\MensagemRepository;

require '../../vendor/autoload.php';

Sessao::inicio();

$mensagem = new MensagemRepository();

$permissao = $_SESSION['permissao'];
$id = $_POST['Excluir'];

if ($permissao == UsuarioConstantes::ESCRITOR || $permissao == UsuarioConstantes::ADMIN) {
    $mensagem->deletaMensagem($id);
}
    header('Location: ../Viewer/home.php?sucesso=000');
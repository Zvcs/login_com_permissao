<?php

namespace src\login\Controller;

require '../../vendor/autoload.php';

use src\login\Conection\Sessao;
use src\login\Repository\UsuarioRepository;

Sessao::inicio();

$nome = $_POST['nome'];
$senha = $_POST['senha'];

if ($nome == '' || $nome == null || $senha == '' || $senha == null) {
    header('Location: ../Viewer/login.php');
    exit();
}

$usuarioLogin = new UsuarioRepository();
$usuarioLogin->realizaLogin($nome, $senha);
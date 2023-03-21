<?php

namespace src\login\Controller;

require_once '../../vendor/autoload.php';

use src\login\Repository\UsuarioRepository;

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$permissao = $_POST['permissao'];

if ($nome == '' || $nome == null || $senha == '' ||
$senha == null || $permissao == '' || $permissao == null) {
    header('Location: ../Viewer/cadastrar.php?sucess=0');
    exit();
}

$usuarioRepository = new UsuarioRepository();
$usuarioRepository->cadastraUsuario($nome, $senha, $permissao);

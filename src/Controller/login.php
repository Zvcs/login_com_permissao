<?php

use src\login\usuario\Usuario;
use src\login\UsuarioController\UsuarioController;

include_once ('../Model/Usuario.php');
include_once ('../Helper/UsuariosConstantes.php');
include_once ('../Controller/UsuarioController.php');

$nome = $_POST['name'];
$senha = $_POST['password'];

$usuario = new Usuario($nome, $senha);

$usuarioController = new UsuarioController($usuario);

echo $usuarioController->realizaLogin();
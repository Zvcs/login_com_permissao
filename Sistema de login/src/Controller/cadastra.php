<?php

use src\login\constantes\ConstantesLogin;
use src\login\usuario\Usuario;
use src\login\UsuarioController\UsuarioController;

include_once ('../Model/Usuario.php');
include_once ('../Helper/UsuariosConstantes.php');
include_once ('../Controller/UsuarioController.php');


$nome = $_POST['name'];
$senha = $_POST['password'];
if ($_POST['permission'] == 'Escritor') {
    $permissao = ConstantesLogin::ESCRITOR;
}else {
    $permissao = ConstantesLogin::LEITOR;
}


$usuario = new Usuario($nome, $senha, $permissao);

$controller = new UsuarioController($usuario);

$message = $controller->cadastraUsuario();

echo $message;
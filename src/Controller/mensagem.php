<?php

use src\login\mensagem\Mensagem;
use src\login\MensagemController\MensagemController;

include_once ('../Model/Mensagem.php');
include_once ('../Helper/UsuariosConstantes.php');
include_once ('../Controller/UsuarioController.php');

$mensagem = $_POST['mensage'];

$modelMensagem = new Mensagem($mensagem, $_SESSION['id'], $_SESSION['nome']);

$controllerMensagem = new MensagemController($modelMensagem);

$controllerMensagem->enviaMensagem();
<?php

use src\login\mensagem\Mensagem;
use src\login\MensagemController\MensagemController;
use src\login\sessao\Sessao;

include_once ('../Model/Mensagem.php');
include_once ('../Helper/UsuariosConstantes.php');
include_once ('../Controller/UsuarioController.php');
include_once ('../Controller/SessionController.php');
include_once ('../Controller/MensagemController.php');

$mensagem = $_POST['mensage'];

Sessao::inicio();

$modelMensagem = new Mensagem($mensagem, $_SESSION['id'], $_SESSION['nome']);

$controllerMensagem = new MensagemController($modelMensagem);

$controllerMensagem->enviaMensagem();
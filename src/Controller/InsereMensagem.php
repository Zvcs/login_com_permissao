<?php

namespace src\login\Controller;

use src\login\Conection\Sessao;
use src\login\Repository\MensagemRepository;

require '../../vendor/autoload.php';

Sessao::inicio();

$nome = $_SESSION['nome'];
$id = $_SESSION['id'];
$texto = $_POST['texto'];

$mensagemRepository = new MensagemRepository();
$mensagemRepository->insereMensagem($nome, $texto, $id);
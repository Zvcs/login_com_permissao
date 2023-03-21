<?php

require '../../vendor/autoload.php';

use src\login\Conection\Sessao;

Sessao::mataSessao();

?>
<html>
    <header>
        <body>
            <h1> É necessário fazer o login para acessar essa página</h1><br>
            <button class="btn-group-toggle"><a href="../Viewer/login.php">Login</a></button>
        </body>
    </header>
</html>
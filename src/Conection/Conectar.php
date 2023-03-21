<?php

namespace src\login\Conection;

require '../../vendor/autoload.php';

use PDO;

class Conectar
{

    public static function conectar()
    {
        $username = 'root';
        $password = "";
        return new PDO('mysql:host=localhost;dbname=loginpermissao', $username, $password);
    }
}
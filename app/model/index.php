<?php

use App\Model\Sql;
use App\Model\Usuario;
use App\Model\Cliente;
use App\Model\Bicicleta;
use App\Model\Aluguel;


require "Conexao.php";
require "Sql.php";
require "Cliente.php";
require "Bicicleta.php";
require "Aluguel.php";
require "Usuario.php";
$user = new Usuario();
print_r($user->listUsuario());
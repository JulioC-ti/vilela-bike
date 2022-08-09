<?php

use App\Model\Cliente;

require_once "autoload.php";

$c = new Cliente();
$cliente = $_GET['cliente'];

$c->mudaStatus($cliente);
header("location:listar.php");



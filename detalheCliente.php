<?php

use App\Model\Cliente;

require "autoload.php";
$cliente = new Cliente();
$c = $cliente->buscarCliente('id', $_GET['cliente'])[0];

// print_r($c);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $c['nome'] ?></title>
</head>
<?php include_once "header.php" ?>
<body>
    <main>
    <div class="container" style="flex-direction: column;">
    <h1>Dados do Cliente</h1>
    <p><strong>Nome do Cliente: </strong> <?= $c['nome'] ?></p>
    <p><strong>CPF: </strong><?= $c['cpf'] ?></p>
    <p><strong>Telefone: </strong><?= $c['telefone'] ?></p>
    <p><strong>Endereço: </strong><?= $c['endereco'] ?></p>
    <p><strong>Bairro: </strong><?= $c['bairro'] ?></p>
    <p><strong>Cidade: </strong><?= $c['cidade'] ?></p>
    <p><strong>Cadastrado: </strong><?= date("d/m/Y",strtotime($c['data_cadastro'])) ?> ás <?= date("H:i",strtotime($c['data_cadastro'])) ?></p>
    </div>
</main>
</body>


</html>
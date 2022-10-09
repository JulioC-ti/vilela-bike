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
    <div class="logo-print"></div>
        <div class="container" style="flex-direction: column;width:800px; margin-top: 10px">
            <table>
                <thead>
                    <td><img src="img/site/logo.png" width="150"></td>
                    <th><h1>Dados Do Cliente</h1></th>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2">
                            <h3>Dados Pessoais</h3>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Cliente:</strong> <?= $c['nome'] ?></td>
                        <td><strong>Cpf:</strong> <?= $c['cpf'] ?></td>
                    </tr>
                    <td>
                            <strong>Telefone:</strong> <?= $c['telefone'] ?>
                        </td>
                        <td><strong>Endereço:</strong> <?= $c['endereco'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Bairro:</strong> <?= $c['bairro'] ?></td>
                        <td><strong>Cidade:</strong> <?= $c['cidade'] ?></td>
                    </tr>
</main>
</body>


</html>
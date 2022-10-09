<?php

use App\Model\Aluguel;

require "autoload.php";
$aluguel = new Aluguel();
$c = $aluguel->getAluguel($_GET['aluguel'])[0];

// print_r($c);//
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
                    <th><h1>Dados Do Aluguel</h1></th>
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
                    <tr>
                        <td>
                            <strong>Telefone:</strong> <?= $c['telefone'] ?>
                        </td>
                        <td><strong>Endereço:</strong> <?= $c['endereco'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Bairro:</strong> <?= $c['bairro'] ?></td>
                        <td><strong>Cidade:</strong> <?= $c['cidade'] ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h3>Dados da bicicleta</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Id do Produto:</strong> <?= $c['id_bicicleta'] ?>
                        </td>
                        <td>
                            <strong>Modelo:</strong> <?= $c['modelo'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Aro:</strong> <?= $c['aro'] ?></td>
                        <td><strong>Cor:</strong> <?= $c['cor'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Marca:</strong> <?= $c['marca'] ?></td>
                        <td><strong>Valor:</strong>R$ <?= number_format($c['valor'],2,",",".") ?></td>
                    </tr>
                    <tr>
                        <td><strong>Retirada:</strong> <?= date("d/m/Y",strtotime($c['retirada']))?></td>
                        <td><strong>Previsão de Entrega:</strong> <?= date("d/m/Y", strtotime($c['entrega'])) ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <strong>Descrição:</strong> <?= $c['descricao'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <strong>Nome do usuário locatário:</strong> <?= $c['nome_usuario'] ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
<?php

use App\Controller\ClienteController;
use App\Model\Cliente;

require "autoload.php";
$cliente = new Cliente();
$cli = $cliente->listCliente(1);
ClienteController::isBloqued();
?>
<?php include_once "header.php" ?>
<div class="container">
    <?php include_once "navbar.php"; ?>
    <main>
        <div class="container">
            <table class="marg pad">
                <thead>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    <?php if (count($cli)) :
                        foreach ($cli as $c) :
                    ?>
                            <tr>
                                <td><?= $c['id'] ?></td>
                                <td><?= $c['nome'] ?></td>
                                <td><?= $c['telefone'] ?></td>
                                <td>
                                    <a class="status" href="detalheCliente.php?cliente=<?= $c['id'] ?>" title="Clique para ver detalhes">&#128065;</a>
                                    <?php if ($c['status_cliente']) : ?>
                                        <a class="status" href="status.php?cliente=<?= $c['id']?>" title="Desativar">&#x274E;</a>
                                    <?php else : ?>
                                        <a class="status" href="status.php?cliente=<?= $c['id']?>" title="Ativar">&#9940;</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach;
                    else : ?>
                        <h1>Não Existem Bicicletas Cadastradas!.</h1>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
</div>
</main>
</div>
</body>

</html>
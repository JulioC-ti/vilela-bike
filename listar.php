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

            <?php if (count($cli)) :

            ?>
                <table class="marg pad">
                    <thead>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </thead>
                    <tbody>
                        <?php foreach ($cli as $c) : ?>
                            <tr>
                                <td><?= $c['id'] ?></td>
                                <td><?= $c['nome'] ?></td>
                                <td><?= $c['telefone'] ?></td>
                                <td>
                                    <a class="status" href="detalheCliente.php?cliente=<?= $c['id'] ?>" title="Clique para ver detalhes">&#128065;</a>
                                    <?php if ($c['status_cliente']) : ?>
                                        <a class="status" href="status.php?cliente=<?= $c['id'] ?>" title="Desativar">&#x274E;</a>
                                    <?php else : ?>
                                        <a class="status" href="status.php?cliente=<?= $c['id'] ?>" title="Ativar">&#9940;</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <div class="aviso">
                <h1>Não existe cliente cadastrado!</h1>
            </div>
               
            <?php
            endif; ?>

        </div>
</div>
</main>
</div>
</body>

</html>
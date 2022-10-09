<?php

use App\Controller\AluguelController;
use App\Model\Aluguel;

require "autoload.php";
$aluguel = new aluguel();
$alu = $aluguel->listAluguel();
?>
<?php include_once "header.php" ?>
<div class="container">
    <?php include_once "navbar.php"; ?>
    <main>
        <div class="container">
            <?php
            if (count($alu) > 0) :
            ?>
                <table class="marg pad">
                    <thead>
                        <th>#</th>
                        <th>RETIRADA</th>
                        <th>ENTREGA</th>
                        <th>Ações</th>
                    </thead>
                    <tbody>
                        <?php foreach ($alu as $a) : ?>
                            <tr>
                                <td><?= $a['id_aluguel'] ?></td>
                                <td><?= date("d/m/Y", strtotime($a['retirada'])) ?></td>
                                <td><?= date("d/m/Y", strtotime($a['entrega'])) ?></td>
                                <td> 
                                    <a class="status" href="aluguelDetalhe.php?aluguel=<?= $a['id_aluguel']?> "title="Clique para ver detalhes">&#128065;</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <div class="aviso">
                    <h1>Não existe aluguel cadastrado!</h1>
                </div>
            <?php
            endif; ?>
        </div>
</div>
</main>
</div>
</body>
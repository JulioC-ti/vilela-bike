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
            <table class="marg pad">
<thead>
                    <th>#</th>
                    <th>RETIRADA</th>
                    <th>ENTREGA</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    <?php foreach($alu as $a):?>
                            <tr>
                                <td><?= $a['id_aluguel'] ?></td>
                                <td><?= date("d/m/Y",strtotime($a['retirada'])) ?></td>
                                <td><?= date("d/m/Y", strtotime($a['entrega'])) ?></td>
                                <td>
                                    <a href="aluguelDetalhe.php?aluguel=<?= $a['id_aluguel'] ?>">Ver</a>
                                </td>
                            </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
</div>
</main>
</div>
</body>


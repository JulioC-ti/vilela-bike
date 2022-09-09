<nav class="nav-bar">
    <h3>Categorias</h3>
    <strong>Aro</strong>
    <ul class="nav-lateral">
        <div class="aros">
            <?php

            use App\Model\Bicicleta;

            $bike = new Bicicleta();
            foreach ($bike->listAro() as $a) :
            ?>
                <li><a href="index.php?busca=<?= $a['id_aro'] ?>">Aro <?= $a['perfil_aro'] ?></a></li>
            <?php
            endforeach;
            if (isset($_SESSION['logado']) && $_SESSION['logado']['tipo_acesso'] == 'admin') :
            ?>
        </div>
        <div class="aros">
            <li><a href="listar.php">Listar</a></li>
            <li><a href="listar-aluguel.php">Aluguel</a></li>
            <li><a href="insert-bike.php">Inserir</a></li>
            <li><a href="form_cliente.php">Novo Cliente</a></li>

        </div>
    <?php endif; ?>
    </ul>

</nav>
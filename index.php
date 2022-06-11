<?php
 require "autoload.php";
 use App\Model\Bicicleta;
 $bike = new Bicicleta();
 $bicicleta = $bike->listBicicleta();
?>
<?php include_once "header.php"?>
    <div class="container">
    <?php include_once "navbar.php";?>
        <main>
            <?php if(count($bicicleta)):
                foreach($bicicleta as $b ):
                ?>
            <div class="card">
                <div class="imagem">
                    <img src="img/BIKE 29.jpg" alt="BAIKE 29">
                </div>
                <h4 class="Card-title"><?=$b['modelo']." ".$b['aro']?></h4>
                <?php if($b['status_bike']): ?>
                        <span class="disponivel" >Disponível</span>
                   <?php else: ?>
                        <span class="indisponivel">Indisponível</span>
                    <?php endif;?>
                <p class="card-data"><?=$b['descricao']?></p>
                <h2 class="card-preço">R$ <?=str_replace(".",",",$b['valor'])?></h2>
                <img src="img/logo pagamento.jpg" class="logo-pagamento">
                <a href="bike.php?visualizar=<?=$b['id_bicicleta']?>" class="btn-alugar">Sobre</a>
            </div>
            <?php endforeach; else:?>
             <h1>Não Existem Bicicletas Cadastradas!.</h1>
            <?php endif;?>
    </div>
    </main>
    </div>
</body>

</html>
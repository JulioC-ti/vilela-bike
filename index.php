<?php
 require "autoload.php";
 use App\Model\Bicicleta;
 $bike = new Bicicleta();
 $bicicleta = $bike->listBicicleta();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/layout.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/formulario.css">
    <title>VILELA BIKE</title>
</head>

<body>
<?php include_once "header.php"?>
    <div class="container">
        <nav class="nav-bar">
            <h3>Categorias</h3>
            <strong>Aro</strong>
            <ul class="nav-lateral">
                <li><a href="#">Aro 24</a></li>
                <li><a href="#">Aro 26</a></li>
                <li><a href="#">Aro 29</a></li>
            </ul>
        </nav>
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
                <h2 class="card-preço">R$ <?=$b['valor']?></h2>
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
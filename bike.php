<?php
 require "autoload.php";
 use App\Model\Bicicleta;
 
 if(isset($_GET['visualizar'])):
    $bike = new Bicicleta();
    $id_bicicleta = $_GET['visualizar'];
    $bicicleta = $bike->buscarBicicleta($id_bicicleta);
    if($id_bicicleta == $bicicleta[0]['id_bicicleta'] && !is_null($bicicleta[0]['id_bicicleta'])):
    include_once "header.php";
?>
  
    <main>
       
        <div class="view">
            <div class="col">
                <img src="img/BIKE 29.jpg" class="img-detail">
            </div>
        <div class="col">
            <h1 class="card-title"><?=$bicicleta[0]['modelo']." ".$bicicleta[0]['aro']?></h1>
            <?php if($bicicleta[0]['status_bike']): ?>
                        <span class="disponivel" >Disponível</span>
                   <?php else: ?>
                        <span class="indisponivel">Indisponível</span>
                    <?php endif;?>
            <p><?=$bicicleta[0]['descricao']?></p>
        <img src="img/logo pagamento.jpg" class="logo-pagamento-view">
        <a href="aluguel.php?alugar=<?=$bicicleta[0]['id_bicicleta']?>" class="btn-alugar">ALUGAR</a><a href="index.php" class="btn-voltar">Voltar</a>
        </div>

        </div>
        
    </main>

    
</body>

</html>
<?php
 else:?>
     <h1> ID Não Encontrado!</h1>
<?php endif;endif;;
?>

<?php
 require "autoload.php";
 use App\Model\Bicicleta;
 
 if(isset($_GET['visualizar']) && $_GET['visualizar']>0):
    $bike = new Bicicleta();
    $id_bicicleta = $_GET['visualizar'];
    $bicicleta = $bike->buscarBicicleta($id_bicicleta);
        if($id_bicicleta == $bicicleta[0]['id_bicicleta'] && !is_null($bicicleta[0]['id_bicicleta'])):
            
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title><?=$bicicleta[0]['modelo']." ".$bicicleta[0]['aro']?></title>
    <link rel="stylesheet" href="css/layout.css">
</head>

<body>
    
    <?php include_once "header.php"?>
  
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
        <a href="#" class="btn-alugar">ALUGAR</a>
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

<?php
require "autoload.php";

use App\Controller\BikeController;
use App\Controller\ClienteController;

include_once "header.php";
ClienteController::isBloqued();

$Cbike = new BikeController();
print_r($Cbike->novaBike());

?>
<div class="container-form">
  <form method="post" enctype="multipart/form-data">
    <div class="form">
      <?php
    //   if (is_array(ClienteController::cliente())) {
    //     foreach (ClienteController::cliente() as $erro) {
    //       echo "<p class='alert'>" . $erro . "</p>";
    //       echo "<script>setTimeout(()=>{
    //                     window.location.href= 'form_cliente.php'
    //                 },3000);</script>";
    //     }
    //   }
      // "aro cor modelo descricao valor marca foto_bike"
      ?>
      <div class="row">
        <h1>Cadastre uma Bicicleta</h1>
      </div>

      <div class="row">
        <label for="aro">Aro</label>
        <select name="aro" class="form-control">
        <option disabled selected>Escolha um aro</option>
        <?php

            use App\Model\Bicicleta;

            $bike = new Bicicleta();
            foreach ($bike->listAro() as $a) :
            ?>
                <option value="<?= $a['id_aro'] ?>">Aro <?= $a['perfil_aro'] ?></option>
            <?php
            endforeach;
            ?>
            </select>
      </div>

      <div class="row">
        <label for="cor">Cor</label>
        <input type="text" class="form-control" placeholder="Cor da bicicleta" maxlenght="255" name="cor" />
      </div>

      <div class="row">
        <label for="modelo">Modelo</label>
        <input type="text" class="form-control" placeholder="Modelo da bicicleta" max="255" min="11" required name="modelo" />
      </div>

      <div class="row">
        <label for="descricao">Descricao</label>
        <input type="text" class="form-control" placeholder="Descrição" min="3" max="255" required name="descricao" />
      </div>

      <div class="row">
        <label for="valor">Valor</label>
        <input type="number" class="form-control" placeholder="Digite seu valor" min="2" max="2555" required name="valor" />
      </div>

      <div class="row">
        <label for="marca">Marca</label>
        <input type="text" class="form-control" placeholder="Marca da bicileta" min="3" max="255" required name="marca" />
      </div>
      <div class="row">
        <input type="file" class="form-control" name="foto_bike" />
      </div>

      <div class="row">
        <button class="form-control btn-entrar">Confirmar</button>
      </div>
    </div>
  </form>
</div>
</body>

</html>
<?php
require "autoload.php";

use App\Controller\AluguelController;
use App\Controller\ClienteController;
use App\Model\Cliente;

include_once "header.php";

?>
    <div class="container-form">
      <form method="post">
        <div class="form">
          
          <div class="row">
            <h1>Aluguel Bike</h1>
            
          </div>

          <div class="row">
          <?php
            if(is_array(AluguelController::alugarBike())){
                foreach(AluguelController::alugarBike() as $erro){
                    echo "<p class='alert'>".$erro."</p>";
                    echo "<script>setTimeout(()=>{
                        window.location.href= 'form_login.php'
                    },5000);</script>";
                }
            }
            ?>
          </div>
          <div class="row">
            <label for="Data">Data de Entrega</label>
            <div class="input-group datepicker">
            <input
              type="date"
              class="form-control date-mask"
              placeholder="dd/mm/aaaa"
              name="data_entrega"
              required
            />
          </div>
          <div class="row">
            <label for="Observacao">Observação</label>
            <br>
            <textarea
              name="observacao"
              cols="33"
              rows="5"
              maxlength="500">
            </textarea>
          </div>
          <div class="row">
            <label for="Nome">Cliente</label>
           <select name="cliente" class="form-control" required>
             <option disabled selected>Selecione um Cliente</option>
             <?php
             $cliente = new Cliente();
             foreach($cliente->listCliente() as $c):
             ?>
              <option value="<?=$c['id']?>"><?=$c['nome']?></option>
             <?php endforeach;?>
           </select>
          </div>
          <div class="row">
            <!-- Aqui ireos usar um input invisivel -->
            <input type="hidden" name="bicicleta" value="<?=$_GET['alugar']?>">
            <input type="hidden" name="usuario" value="<?=$_SESSION['logado']['id_user']?>">
            <button class="form-control btn-entrar">Confirmar</button>
          </div>
        </div>

      </form>
    </div>
  </body>
</html>

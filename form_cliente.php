<?php
require "autoload.php";

use App\Controller\ClienteController;

include_once "header.php";
ClienteController::isBloqued();
?>
<div class="container-form">
  <form method="post">
    <div class="form">
      <?php
      if (is_array(ClienteController::cliente())) {
        foreach (ClienteController::cliente() as $erro) {
          echo "<p class='alert'>" . $erro . "</p>";
          echo "<script>setTimeout(()=>{
                        window.location.href= 'form_cliente.php'
                    },3000);</script>";
        }
      }
      ?>
      <div class="row">
        <h1>Cadastre um Cliente</h1>
      </div>

      <div class="row">
        <label for="Nome">Nome</label>
        <input type="text" class="form-control" placeholder="Digite seu Nome" min="3" max="255" name="nome" />
      </div>

      <div class="row">
        <label for="CPF">CPF</label>
        <input type="number" class="form-control" placeholder="Somente Números" maxlenght="11" name="cpf" />
      </div>

      <div class="row">
        <label for="Telefone">Telefone</label>
        <input type="number" class="form-control" placeholder="Somente Números" max="11" min="11" required name="telefone" />
      </div>

      <div class="row">
        <label for="Endereco">Endereco</label>
        <input type="text" class="form-control" placeholder="Digite seu Endereço" min="3" max="255" required name="endereco" />
      </div>

      <div class="row">
        <label for="Bairro">Bairro</label>
        <input type="text" class="form-control" placeholder="Digite seu Bairro" min="3" max="255" required name="bairro" />
      </div>

      <div class="row">
        <label for="Cidade">Cidade</label>
        <input type="text" class="form-control" placeholder="Digite sua Cidade" min="3" max="255" required name="cidade" />
      </div>


      <div class="row">
        <button class="form-control btn-entrar">Confirmar</button>
      </div>
    </div>
  </form>
</div>
</body>

</html>
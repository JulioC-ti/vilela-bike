<?php

use App\Controller\ClienteController;

require_once "autoload.php";
ClienteController::login();
ClienteController::isLogged();
include_once "header.php"?>
<div class="container-form">
      <form action="" method="post">

        <div class="form">
        <?php
            if(is_array(ClienteController::login())){
                foreach(ClienteController::login() as $erro){
                    echo "<p class='alert'>".$erro."</p>";
                    echo "<script>setTimeout(()=>{
                        window.location.href= 'form_login.php'
                    },3000);</script>";
                }
            }
            ?>
              <div class="row">
                <h1>Login</h1>
              </div>

              <div class="row">
                <label for="login">Login</label>
                <input
                  type="text"
                  class="form-control"
                  required
                  placeholder=""
                  name="login"
                />
              </div>

              <div class="row">
                <label for="senha">Senha</label>
                <input type="password"
                class="form-control"
                placeholder="****"
                name="senha"
                />
              </div>

              <div class="row">
                <button class="form-control btn-entrar">ENTRAR</button>
              </div>
        </div>

      </form>
    </div>
  </body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BIKE 29</title>
    <link rel="stylesheet" href="css/layout.css" />
    <link rel="stylesheet" href="css/formulario.css" />
  </head>
  <?php include_once "header.php"?>

  <body>
    <div class="container-form">
      <form action="#">
        <div class="form">
          <div class="row">
            <h1>Login</h1>
          </div>
          <div class="row">
            <label for="email">E-mail</label>
            <input
              type="email"
              class="form-control"
              required
              placeholder="email@email.com"
            />
          </div>
          <div class="row">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" placeholder="****" />
          </div>

          <div class="row">
            <button class="form-control btn-entrar">ENTRAR</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>

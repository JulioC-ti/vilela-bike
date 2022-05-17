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
    <header class="header-top">
        <div class="logo">
            <a href="index.php">Vilela BIke</a>
        </div>
        <form action="#" class="form-search">
            <input type="search" placeholder="Pesquisa"> <button>Buscar</button>
        </form>
        <ul class="nav-main">
            <li><a href="index.php">Home</a></li>

            <?php
            if (isset($_SESSION['logado']) && $_SESSION['logado']['tipo_acesso'] == 'admin') {
                echo "<li><a href='form_cliente.php'>Novo Cliente</a></li>";
                echo "<li><a>" . $_SESSION['logado']['nome_usuario'] . "</a></li>";
                echo "<li><a href='logout.php'>Sair</a></li>";
            } elseif (isset($_SESSION['logado']) && $_SESSION['logado']['tipo_acesso'] == 'cliente') {
                echo "<li><a>" . $_SESSION['logado']['nome_usuario'] . "</a></li>";
                echo "<li><a href='logout.php'>Sair</a></li>";
            } else {
                echo '<li><a href="form_login.php">login</a></li>';
            } ?>

        </ul>
    </header>
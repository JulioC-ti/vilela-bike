<nav class="nav-bar">
    <h3>Categorias</h3>
    <strong>Aro</strong>
    <ul class="nav-lateral">
        <li><a href="#">Aro 24</a></li>
        <li><a href="#">Aro 26</a></li>
        <li><a href="#">Aro 29</a></li>
        <?php
        if(isset($_SESSION['logado']) && $_SESSION['logado']['tipo_acesso'] == 'admin'):
        ?>
        <li><a href="listar.php">Listar</a></li>
        <?php endif;?>
    </ul>

</nav>
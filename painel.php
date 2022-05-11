<?php include_once "header.php" ?>




<?php
session_start();
$usuario = $_SESSION['usuario'];

if ($usuario['perfil'] != "profile_admin") {
?>
    <h2 id="semAcesso">Você não possui acesso ao sistema!</h2>
<?php
} else {
?>

    <h2>Seja bem vindo @<?php print($usuario['login']) ?></h2>


    <h4>Seleciona uma opção: </h4>
    <!-- <br> -->

    <table class="table">
        <thead id="proff">
            <th><a href="formCadastro.php">CADASTRAR PRODUTOS</th>
            <th><a href="listar_produtos.php">LISTAR PRODUTOS</th>
            <th><a href="index.php">PÁGINA INICIAL</th>
        </thead>
        <tbody id="table-contato">
            <tr>
                <td><a href="formCadastro.php"><img src="imgs/cadastro.png" class="fotoContato"></td>
                <td><a href="listar_produtos.php"><img src="imgs/lista.png" class="fotoContato"></td>
                <td><a href="index.php"><img src="imgs/home.png" class="fotoContato"></td>
            </tr>

            <!-- <ul>
                <li><a href="formCadastro.php"><img src="imgs/cadastro.png" class="fotoLinkedin"></a></li>
                <li><a href="listar_produtos.php">Listar<img src="imgs/lista.png" class="fotoLinkedin"></a></li>
                <li><a href="index.php">Página<img src="imgs/home.png" class="fotoLinkedin"></a></li>
            </ul> -->
        <?php } ?>

        <?php
        
        if (isset($_SESSION['mensagem'])) {
            $msg = $_SESSION['mensagem'];

            echo '<p>' . $msg . '</p>';
            unset($_SESSION['mensagem']);
        }

        ?>

        <?php include_once "footer.php" ?>
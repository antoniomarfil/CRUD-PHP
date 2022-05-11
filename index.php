<?php include_once "header.php" ?>

<h2 class="alinha-subtitle">Acesso ao sistema de gestão: </h2><br>

<form action="login_user.php" method="post">
    <div class="form-group">
        <label for="login_user">Login: </label>
        <input type="text" name="login_user" id="login_user" class="form-control" placeholder="Digite seu login">
    </div>
    <div class="form-group">
        <label for="password_user">Senha: </label>
        <input type="password" name="password_user" id="password_user" class="form-control" placeholder="Digite sua senha">
    </div>

    <input type="submit" value="Logar" class="btn btn-primary">

</form>
<br>
<?php
session_start();
if (isset($_SESSION['mensagem'])) {
    $msg = $_SESSION['mensagem'];

    echo '<p>' . $msg . '</p>';
    unset($_SESSION['mensagem']);
}

?>

<h4><a href="formCadastroUser.php">Cadastrar novo usuario</a></h4>


<?php include_once "footer.php" ?>